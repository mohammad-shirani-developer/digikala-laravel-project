<?php

namespace App\Repositories\Admin;

use App\Models\PaymentMethod;

class AdminPaymentRepository implements AdminPaymentRepositoryInterface
{
    public function submit($FormData, $paymentId)
    {
        PaymentMethod::query()->updateOrCreate([
            'id' => $paymentId,
        ], [
            'name' => $FormData['name'],
            'merchent_id' => $FormData['merchentId']

        ]);
    }
}
