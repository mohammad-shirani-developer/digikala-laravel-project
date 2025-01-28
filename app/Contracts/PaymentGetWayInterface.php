<?php

namespace App\Contracts;

interface PaymentGetWayInterface
{
    public function request ($amount,$orderNumber);

    public function verify ($request);

    public function getPaymentMethodId ();
    
}
