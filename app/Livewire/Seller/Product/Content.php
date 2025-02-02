<?php

namespace App\Livewire\Seller\Product;

use App\Models\Product;
use App\Repositories\Admin\AdminProductRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Content extends Component
{
    public $productName;
    public $productId;
    public $longDescription;
    public $shortDescription;
    private $repository;



    public function boot(AdminProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount(Product $product)
    {
        $this->productName = $product->name;
        $this->productId = $product->id;
    }

    public function submit($FormData)
    {
        $FormData['long_description'] = $this->longDescription;
        $validator = Validator::make($FormData, [
            'short_description' => 'required|string',
            'long_description' => 'required|string',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
        ]);
        $validator->validate();
        $this->resetValidation();
        $this->repository->submitProductContent($FormData, $this->productId);
        $this->redirect(route('seller.product.index'));
        session()->flash('success', 'عملیات ثبت محتوا محصول با موفقیت انجام شد !');
    }

    public function render()
    {
        return view('livewire.seller.product.content')->layout('layouts.seller.app');
    }
}
