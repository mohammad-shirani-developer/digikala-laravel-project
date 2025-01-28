<?php

namespace App\Repositories\Client\shipping;



interface ClientShippingRepositoryInterface
{
    public function checkQuantity($cartItem);

    public function createOrder($paymentMethodId, $orderNumber, $totalAmount, $addressId, $deliveryMethodId);

    public function createOrderItems($cartItem, $orderId);

    public function createPayment($orderId, $orderNumber, $totalAmount);

    public function submitOrderBeforPayment($cartItem, $paymentMethodId, $orderNumber, $totalAmount, $addressId, $deliveryMethodId);

    public function submitOrder($paymentGetWay, $totalAmount, $addressId, $deliveryMethodId);
}
