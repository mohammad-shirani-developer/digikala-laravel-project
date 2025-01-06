<?php

namespace App\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Product;
use App\Models\Seller;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $categories = [];
    public $sellers = [];
    public $name;
    public $slug;

    // #[Validate(['photos.*' => 'image|max:1024'])]
    public $photos = [];

    public $productId;

    public function mount()
    {
        $this->categories = Category::all();
        $this->sellers = Seller::query()->select('id', 'shop_name')->get();
    }

    public function updatedName()
    {
        $this->slug = Str::slug($this->name, '-', null);
    }

    public function submit($FormData, Product $product)
    {



        if (isset($FormData['featured'])) {
            $FormData['featured'] = true;
        } else {
            $FormData['featured'] = false;
        }

        // dd($FormData);
        $FormData['photos'] = $this->photos;

        $validator = Validator::make($FormData, [
            'photos.*' => 'nullable|image|mimes:png,jpg,jpeg,gif,webp',
            'name' => 'required|string',
            'slug' => 'required|string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'price' => 'required|integer',
            'discount' => 'nullable|integer',
            'stock' => 'required|integer',
            'featured' => 'nullable|boolean',
            'discount_duration' => 'nullable|string',
            'sellerId' => 'nullable|exists:sellers,id',
            'categoryId' => 'required|exists:categories,id',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است ',
            '*.integer' => 'این فیلد باید فرمت عددی باشد ',
            '*.min' => 'حداکثر تعداد کاراکترها : 50',
            'categoryId.exists' => 'دسته بندی نامعتبر است.',
            'sellerId.exists' => 'فروشنده نامعتبر است.',
            'photos.*.image' => 'فرمت  نامعتبر است.',
        ]);
        $validator->validate();
        $this->resetValidation();
        $product->submit($FormData, $this->productId, $this->photos);
        $this->reset();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function render()
    {
        return view('livewire.admin.product.create.index')->layout('layouts.admin.app');
    }
}
