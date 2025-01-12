<?php

namespace App\Repositories\Admin;

use App\Models\DeliveryMethod;

class AdminDeliveryRepository implements AdminDeliveryRepositoryInterface
{
    public function submit($FormData, $deliveryId)
    {
        DeliveryMethod::query()->updateOrCreate([
            'id' => $deliveryId,
        ], [
            'name' => $FormData['name'],
            'price' => $FormData['price']

        ]);
    }
}
