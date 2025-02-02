<?php

namespace App\Livewire\Seller\Product;

use App\Models\Product;
use App\Repositories\Admin\AdminProductRepositoryInterface;
use Illuminate\Support\Facades\Auth;
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
        $sellerId=Auth::guard('seller')->id();

        $products = Product::query()
        ->where('seller_id',$sellerId)
        ->with('category', 'coverImage')->latest()->paginate(10);
        return view('livewire.seller.product.index', [
            'products' => $products
        ])->layout('layouts.seller.app');
    }
}
