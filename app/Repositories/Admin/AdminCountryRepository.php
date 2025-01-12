<?php

namespace App\Repositories\Admin;

use App\Models\Country;

class AdminCountryRepository implements AdminCountryRepositoryInterface
{
    public function submit($FormData, $countryId)
    {

        Country::query()->updateOrCreate([
            'id' => $countryId,
        ], [
            'name' => $FormData['name'],

        ]);
    }
}
