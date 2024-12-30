<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function submit($FormData, $stateId)
    {
        State::query()->updateOrCreate([
            'id' => $stateId,
        ], [
            'name' => $FormData['name'],
            'country_id' => $FormData['countryId']

        ]);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
