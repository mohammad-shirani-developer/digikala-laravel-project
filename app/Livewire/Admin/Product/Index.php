<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SeoItem;
use Livewire\Component;

class Index extends Component
{
    public function delete($productId)
    {
        $product = Product::query()->where('id', $productId)->first();
        if ($product) {
            $product->delete();
        }
        ProductImage::query()->where('product_id', $productId)->delete();
        SeoItem::query()->where('ref_id', $productId)->delete();
    }

    public function render()
    {
        $products = Product::query()->with('category', 'coverImage')->latest()->paginate(10);
        return view('livewire.admin.product.index', [
            'products' => $products
        ])->layout('layouts.admin.app');
    }
}
