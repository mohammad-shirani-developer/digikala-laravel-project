<?php

namespace App\Contracts;

interface PaymentGetWayInterface
{
    public function request ($amount);

    public function verify ($request);

    public function getPaymentMethodId ();
    
}
