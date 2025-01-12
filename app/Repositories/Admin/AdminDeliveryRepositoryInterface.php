<?php

namespace App\Repositories\Admin;



interface AdminDeliveryRepositoryInterface
{
    public function submit($FormData, $deliveryId);
}
