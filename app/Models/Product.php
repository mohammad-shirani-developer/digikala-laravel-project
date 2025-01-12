<?php

namespace App\Models;

use App\Traits\UploadFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;


class Product extends Model
{
    use HasFactory, SoftDeletes, UploadFile;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function coverImage()
    {
        return $this->belongsTo(ProductImage::class, 'id', 'product_id')->where('is_cover', true);
    }

    public function seoItem()
    {
        return $this->belongsTo(SeoItem::class, 'id', 'ref_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
