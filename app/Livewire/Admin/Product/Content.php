<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Content extends Component
{
    public $productName;
    public $productId;
    public $longDescription;

    public function mount(Product $product)
    {
        $this->productName = $product->name;
        $this->productId = $product->id;
    }

    public function submit($FormData, Product $product)
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
        $product->submitProductContent($FormData, $this->productId);
    }

    public function render()
    {
        return view('livewire.admin.product.content')->layout('layouts.admin.app');
    }
}
