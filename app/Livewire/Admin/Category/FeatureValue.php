<?php

namespace App\Livewire\Admin\Category;

use App\Models\CategoryFeature;
use App\Models\CategoryFeatureValue;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class FeatureValue extends Component
{
    use WithPagination;

    public $featureId;
    public $featureName;
    public $value;
    public $valueId;



    public function mount(CategoryFeature $categoryFeature)
    {
        $this->featureId = $categoryFeature->id;
        $this->featureName = $categoryFeature->name;
    }

    public function submit($FormData, CategoryFeatureValue $categoryFeatureValue)
    {
        // dd($FormData);



        $validator = Validator::make($FormData, [
            'value' => 'required|string|max:50',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.max' => 'حداکثر تعداد کاراکترها : 50',
        ]);
        $validator->validate();
        $this->resetValidation();
        $categoryFeatureValue->submit($FormData, $this->valueId, $this->featureId);
        $this->reset('value');
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function edit($categoryFeatureValueId)
    {
        $CategoryFeatureValue = CategoryFeatureValue::query()->where('id', $categoryFeatureValueId)->first();
        if ($CategoryFeatureValue) {
            $this->value = $CategoryFeatureValue->value;
            $this->valueId = $CategoryFeatureValue->id;
            $this->featureId = $CategoryFeatureValue->category_feature_id;
        }
    }

    public function delete($categoryFeatureValueId)
    {

        CategoryFeatureValue::query()->where('id', $categoryFeatureValueId)->delete();

        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function render()
    {
        $featureValues = CategoryFeatureValue::query()->where('category_feature_id', $this->featureId)->paginate(10);
        return view('livewire.admin.category.feature-value.index', [
            'featureValues' => $featureValues
        ])->layout('layouts.admin.app');
    }
}
