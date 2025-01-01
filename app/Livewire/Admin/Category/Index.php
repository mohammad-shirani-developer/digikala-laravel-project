<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $categoryId;
    public $name;
    public $categories = [];
    public $parentId;


    public function mount()
    {
        $this->categories = Category::all();
    }

    public function submit($FormData, Category $category)
    {
        // dd($this->categoryId);


        $validator = Validator::make($FormData, [
            'name' => 'required|string|max:30',
            'parentId' => 'exists:categories,id',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.max' => 'حداکثر تعداد کاراکترها : 30',
            'parentId.exists' => 'دسته بندی نامعتبر است.'
        ]);
        $validator->validate();
        $this->resetValidation();
        $category->submit($FormData, $this->categoryId);
        $this->reset();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function edit($category_id)
    {
        $Category = Category::query()->where('id', $category_id)->first();
        if ($Category) {
            $this->name = $Category->name;
            $this->categoryId = $Category->id;
            $this->parentId = $Category->category_id;
        }
    }

    public function delete($category_id)
    {

        $category = Category::query()->where('id', $category_id)->first();
        if ($category->children()->exists()) {
            $this->dispatch('error', 'این دسته بندی دارای زیر شاخه است و نمی توانید آن را حذف کنید');
            return;
        }
        $category->delete();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }




    public function render()
    {
        $categories = Category::query()->latest()->paginate(10);
        return view('livewire.admin.category.index', [
            'allCategories' => $categories
        ])->layout('layouts.admin.app');
    }
}
