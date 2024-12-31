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



    public function render()
    {
        $categories = Category::query()->latest()->paginate(10);
        return view('livewire.admin.category.index', [
            'allCategories' => $categories
        ])->layout('layouts.admin.app');
    }
}
