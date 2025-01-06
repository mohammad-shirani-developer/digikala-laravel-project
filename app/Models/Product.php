<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

use function PHPUnit\Framework\fileExists;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function submit($FormData, $productId, $photos)
    {
        DB::transaction(function () use ($FormData, $productId, $photos) {

            $product = $this->submitToProduct($FormData, $productId);
            $this->submitToSeoItem($FormData, $product->id);
            $this->submitToProductImage($photos, $product->id);
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
            'seller_id' => $FormData['sellerId']

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

    public function submitToProductImage($photos, $productId)
    {
        foreach ($photos as $photo) {
            $path = pathinfo($photo->hashName(), PATHINFO_FILENAME) . '.webp';

            ProductImage::query()->create(
                [
                    'path' => $path,
                    'product_id' => $productId,

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
        $path = public_path('product/' . $productId . '/' . $folder);
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }
        $manager = new ImageManager(new Driver());
        $manager->read($photo->getRealPath())->scale($width, $height)
            ->toWebp()
            ->save($path . '/' . pathinfo($photo->hashName(), PATHINFO_FILENAME) . '.webp');
    }
}
