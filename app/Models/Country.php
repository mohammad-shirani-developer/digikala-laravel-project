<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function submit($FormData, $countryId)
    {

        Country::query()->updateOrCreate([
            'id' => $countryId,
        ], [
            'name' => $FormData['name'],

        ]);
    }
}
