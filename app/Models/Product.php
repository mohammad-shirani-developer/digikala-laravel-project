<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

use function PHPUnit\Framework\fileExists;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function submit($FormData, $productId, $photos, $coverIndex)
    {
        DB::transaction(function () use ($FormData, $productId, $photos, $coverIndex) {

            $product = $this->submitToProduct($FormData, $productId);
            $this->submitToSeoItem($FormData, $product->id);
            $this->submitToProductImage($photos, $product->id, $coverIndex);
            $this->saveImages($product->id, $photos);
        });
    }

    public function submitToProduct($FormData, $productId)
    {
        return Product::query()->updateOrCreate([
            'id' => $productId,
        ], [
            'name' => $FormData['name'],
            'price' => $FormData['price'],
            'discount' => $FormData['discount'],
            'stock' => $FormData['stock'],
            'featured' => $FormData['featured'],
            'discount_duration' => $FormData['discount_duration'],
            'category_id' => $FormData['categoryId'],
            'seller_id' => $FormData['sellerId'],
            'p_code' => config('app.name') . '-' . $this->generateProductCode()

        ]);
    }

    public function submitToSeoItem($FormData, $productId)
    {
        SeoItem::query()->updateOrCreate([
            'type' => 'product',
            'ref_id' => $productId
        ], [
            'slug' => $FormData['slug'],
            'meta_title' => $FormData['meta_title'],
            'meta_description' => $FormData['meta_description'],
        ]);
    }

    public function submitToProductImage($photos, $productId, $coverIndex)
    {
        foreach ($photos as $index => $photo) {
            $path = pathinfo($photo->hashName(), PATHINFO_FILENAME) . '.webp';

            ProductImage::query()->create(
                [
                    'path' => $path,
                    'product_id' => $productId,
                    'is_cover' => $index == $coverIndex

                ]
            );
        }
    }

    public function saveImages($productId, $photos)
    {
        foreach ($photos as $photo) {

            $this->resizeImage($photo, $productId, 100, 100, 'small');
            $this->resizeImage($photo, $productId, 300, 300, 'medium');
            $this->resizeImage($photo, $productId, 800, 800, 'large');
            $photo->delete();
        }
    }

    public function resizeImage($photo, $productId, $width, $height, $folder)
    {
        $path = public_path('products/' . $productId . '/' . $folder);
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }
        $manager = new ImageManager(new Driver());
        $manager->read($photo->getRealPath())->scale($width, $height)
            ->toWebp()
            ->save($path . '/' . pathinfo($photo->hashName(), PATHINFO_FILENAME) . '.webp');
    }

    public function generateProductCode()
    {
        do {
            $randomCode = rand(100, 100000000);
            $checkCode = Product::query()->where('p_code', $randomCode)->first();
        } while ($checkCode);
        return $randomCode;
    }

    public function removeProduct(Product $product)
    {
        DB::transaction(function () use ($product) {

            $product->delete();
            ProductImage::query()->where('product_id', $product->id)->delete();
            SeoItem::query()->where('ref_id', $product->id)->delete();
            File::deleteDirectory('products/' . $product->id);
        });
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function coverImage()
    {
        return $this->belongsTo(ProductImage::class, 'id', 'product_id')->where('is_cover', true);
    }
}
