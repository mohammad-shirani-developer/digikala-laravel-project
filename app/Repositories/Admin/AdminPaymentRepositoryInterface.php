<?php

namespace App\Repositories\Admin;



interface AdminPaymentRepositoryInterface
{
    public function submit($FormData, $paymentId);
}
