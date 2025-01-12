<?php

namespace App\Repositories\Admin;

use App\Models\City;

class AdminCityRepository implements AdminCityRepositoryInterface
{
    public function submit($FormData, $cityId)
    {
        City::query()->updateOrCreate([
            'id' => $cityId,
        ], [
            'name' => $FormData['name'],
            'state_id' => $FormData['stateId']

        ]);
    }
}
