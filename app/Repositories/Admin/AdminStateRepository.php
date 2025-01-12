<?php

namespace App\Repositories\Admin;

use App\Models\State;

class AdminStateRepository implements AdminStateRepositoryInterface
{
    public function submit($FormData, $stateId)
    {
        State::query()->updateOrCreate([
            'id' => $stateId,
        ], [
            'name' => $FormData['name'],
            'country_id' => $FormData['countryId']

        ]);
    }
}
