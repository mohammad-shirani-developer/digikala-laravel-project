<?php

namespace App\Repositories\Client\cart;



interface ClientCartRepositoryInterface
{
    public function updateCartQuantity($itemId, $action);

    public function getCartWithCalculations();


}
