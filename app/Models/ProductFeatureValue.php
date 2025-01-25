<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductFeatureValue extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function categoryFeature()
    {
        return $this->belongsTo(CategoryFeature::class);
    }

    public function categoryFeatureValue()
    {
        return $this->belongsTo(CategoryFeatureValue::class);
    }
}
