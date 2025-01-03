<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryFeature extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function submit($FormData, $categoryId, $featureId)
    {
        CategoryFeature::query()->updateOrCreate([
            'id' => $featureId,
        ], [
            'name' => $FormData['name'],
            'category_id' => $categoryId

        ]);
    }

    public function values()
    {
        return $this->hasMany(CategoryFeatureValue::class);
    }
}
