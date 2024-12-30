<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function submit($FormData, $cityId)
    {
        City::query()->updateOrCreate([
            'id' => $cityId,
        ], [
            'name' => $FormData['name'],
            'state_id' => $FormData['stateId']

        ]);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
