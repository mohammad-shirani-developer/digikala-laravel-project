<?php

namespace App\Models;

use App\Traits\UploadFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;


class Product extends Model
{
    use HasFactory, SoftDeletes, UploadFile;

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
        // dd($coverIndex);
        ProductImage::query()->where('product_id', $productId)->update(['is_cover' => false]);

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

            $this->uploadImageInWebpFormat($photo, $productId, 100, 100, 'small');
            $this->uploadImageInWebpFormat($photo, $productId, 300, 300, 'medium');
            $this->uploadImageInWebpFormat($photo, $productId, 800, 800, 'large');
            $photo->delete();
        }
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


    public function submitProductContent($FormData, $productId)
    {
        Product::query()->where('id', $productId)->update([
            'short_description' => $FormData['short_description'],
            'long_description' => $FormData['long_description'],
        ]);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function coverImage()
    {
        return $this->belongsTo(ProductImage::class, 'id', 'product_id')->where('is_cover', true);
    }

    public function seoItem()
    {
        return $this->belongsTo(SeoItem::class, 'id', 'ref_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
