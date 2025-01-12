<?php

namespace App\Repositories\Admin;

use App\Models\Category;
use App\Models\CategoryFeature;
use App\Models\CategoryFeatureValue;

class AdminCategoryRepository implements AdminCategoryRepositoryInterface
{
    public function submit($FormData, $categoryId)
    {
        if ($FormData['parentId'] == "") {
            $FormData['parentId'] = null;
        }

        Category::query()->updateOrCreate([
            'id' => $categoryId,
        ], [
            'name' => $FormData['name'],
            'category_id' => $FormData['parentId']

        ]);
    }

    public function submitCategoryFeatureValue($FormData, $valueId, $featureId)
    {
        CategoryFeatureValue::query()->updateOrCreate([
            'id' => $valueId,
        ], [
            'value' => $FormData['value'],
            'category_feature_id' => $featureId

        ]);
    }

    public function submitCategoryFeature($FormData, $categoryId, $featureId)
    {
        CategoryFeature::query()->updateOrCreate([
            'id' => $featureId,
        ], [
            'name' => $FormData['name'],
            'category_id' => $categoryId

        ]);
    }
}
