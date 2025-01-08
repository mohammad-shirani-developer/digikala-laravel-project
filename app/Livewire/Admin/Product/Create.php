<?php

namespace App\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Seller;
use Illuminate\Support\Facades\File;
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

    public $photos = [];

    public $productId;

    public $coverIndex = 0;

    // edit

    public $product;

    public function mount()
    {
        if ($_GET and $_GET['p_id']) {
            $this->productId = $_GET['p_id'];
            $this->product = Product::query()->with('seoItem', 'images')
                ->where('id', $this->productId)->firstOrFail();

            $this->name = $this->product->name;
            $this->slug = $this->product->seoItem->slug;
            // dd($this->product);
        }
        // dd($this->product->discount_duration);


        $this->categories = Category::all();
        $this->sellers = Seller::query()->select('id', 'shop_name')->get();
    }

    public function updatedName()
    {
        $this->slug = Str::slug($this->name, '-', null);
    }

    public function submit($FormData, Product $product)
    {

        // dd($FormData);

        if (isset($FormData['featured'])) {
            $FormData['featured'] = true;
        } else {
            $FormData['featured'] = false;
        }

        if ($FormData['discount_duration'] == '') {
            $FormData['discount_duration'] = null;
        }

        if (!isset($FormData['sellerId'])) {
            $FormData['sellerId'] = null;
        }

        if ($FormData['discount'] == '') {
            $FormData['discount'] = null;
        }

        // dd($FormData);
        $FormData['photos'] = $this->photos;

        $FormData['coverIndex'] = $this->coverIndex;

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
            'coverIndex' => 'required',
        ], [
            'coverIndex.required' => 'لطفا یک تصویر شاخص انتخاب کنید !',
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
        $product->submit($FormData, $this->productId, $this->photos, $this->coverIndex);
        $this->redirect(route('admin.product.index'));
        session()->flash('success', 'محصول با موفقیت افزوده شد !');
    }

    public function setCoverImage($index)
    {
        $this->coverIndex = $index;
    }

    public function removePhoto($index)
    {
        if ($index == $this->coverIndex) {
            $this->coverIndex = null;
        }
        array_splice($this->photos, $index, 1);
    }

    public function removeOldPhoto(ProductImage $productImage, $productId)
    {
        $productImage->delete();
        File::delete(public_path('products/' . $productId . '/small/' . $productImage->path));
        File::delete(public_path('products/' . $productId . '/medium/' . $productImage->path));
        File::delete(public_path('products/' . $productId . '/large/' . $productImage->path));
    }

    public function setCoverOldImage($photoId)
    {
        dd($photoId);

        ProductImage::query()->where('product_id', $this->productId)->update(['is_cover' => false]);
        ProductImage::query()->where([
            'product_id' => $this->productId,
            'id' => $photoId
        ])->update(['is_cover' => true]);
        $this->dispatch('success', 'تصویر کاور با موفقیت تغییر کرد');
    }

    public function render()
    {
        return view('livewire.admin.product.create.index')->layout('layouts.admin.app');
    }
}
