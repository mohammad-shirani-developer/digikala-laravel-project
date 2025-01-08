<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SeoItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Index extends Component
{
    public function delete(Product $product)
    {
        $product->removeProduct($product);
    }

    public function render()
    {
        $products = Product::query()->with('category', 'coverImage')->latest()->paginate(10);
        return view('livewire.admin.product.index', [
            'products' => $products
        ])->layout('layouts.admin.app');
    }
}
