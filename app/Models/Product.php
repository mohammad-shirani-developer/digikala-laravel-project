<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function submit($FormData, $productId)
    {
        $product = $this->submitToProduct($FormData, $productId);
        $this->submitToSeoItem($FormData, $product->id);
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
}
