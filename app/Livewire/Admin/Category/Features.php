<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use App\Models\CategoryFeature;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Features extends Component
{
    use WithPagination;

    public $categoryName;
    public $categoryId;
    public $featureId;
    public $name;

    public function mount(Category $category)
    {
        $this->categoryName = $category->name;
        $this->categoryId = $category->id;
    }

    public function submit($FormData, CategoryFeature $CategoryFeature)
    {
        // dd($this->categoryId);


        $validator = Validator::make($FormData, [
            'name' => 'required|string|max:30',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.max' => 'حداکثر تعداد کاراکترها : 30',
        ]);
        $validator->validate();
        $this->resetValidation();
        $CategoryFeature->submit($FormData, $this->categoryId, $this->featureId);
        $this->reset('name');
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }




    public function render()
    {
        $categoryFeatures = CategoryFeature::query()->where('category_id', $this->categoryId)->paginate(10);
        return view('livewire.admin.category.features.index', [
            'categoryFeatures' => $categoryFeatures
        ])->layout('layouts.admin.app');
    }
}
