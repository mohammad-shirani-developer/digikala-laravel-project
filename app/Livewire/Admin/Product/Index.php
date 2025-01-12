<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SeoItem;
use App\Repositories\Admin\AdminProductRepositoryInterface;
use Livewire\Component;

class Index extends Component
{
    private $repository;


    public function boot(AdminProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function delete(Product $product)
    {
        $this->repository->removeProduct($product);
    }

    public function render()
    {
        $products = Product::query()->with('category', 'coverImage')->latest()->paginate(10);
        return view('livewire.admin.product.index', [
            'products' => $products
        ])->layout('layouts.admin.app');
    }
}
