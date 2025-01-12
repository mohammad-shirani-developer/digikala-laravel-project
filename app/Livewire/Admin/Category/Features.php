<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use App\Models\CategoryFeature;
use App\Repositories\Admin\AdminCategoryRepositoryInterface;
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

    private $repository;


    public function boot(AdminCategoryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount(Category $category)
    {
        $this->categoryName = $category->name;
        $this->categoryId = $category->id;
    }

    public function submit($FormData, CategoryFeature $CategoryFeature)
    {
        // dd($this->categoryId);


        $validator = Validator::make($FormData, [
            'name' => 'required|string|max:50',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.max' => 'حداکثر تعداد کاراکترها : 50',
        ]);
        $validator->validate();
        $this->resetValidation();
        $this->repository->submitCategoryFeature($FormData, $this->categoryId, $this->featureId);
        $this->reset('name');
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function edit($categoryFeatureId)
    {
        $CategoryFeature = CategoryFeature::query()->where('id', $categoryFeatureId)->first();
        if ($CategoryFeature) {
            $this->name = $CategoryFeature->name;
            $this->featureId = $CategoryFeature->id;
            $this->categoryId = $CategoryFeature->category_id;
        }
    }

    public function delete($categoryFeatureId)
    {

        $CategoryFeature = CategoryFeature::query()->where('id', $categoryFeatureId)->first();
        if ($CategoryFeature->values()->exists()) {
            $this->dispatch('error', 'این دسته بندی دارای زیر شاخه است و نمی توانید آن را حذف کنید');
            return;
        }
        $CategoryFeature->delete();
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
