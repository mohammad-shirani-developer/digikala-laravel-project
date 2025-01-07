<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryFeatureValue extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function submit($FormData, $valueId, $featureId)
    {
        CategoryFeatureValue::query()->updateOrCreate([
            'id' => $valueId,
        ], [
            'value' => $FormData['value'],
            'category_feature_id' => $featureId

        ]);
    }
}
