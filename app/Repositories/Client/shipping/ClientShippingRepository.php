<?php

namespace App\Repositories\Client\shipping;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ClientShippingRepository implements ClientShippingRepositoryInterface
{
    public function checkQuantity($cartItem)
    {
        foreach ($cartItem as $item) {
            $product = Product::query()->where('id', $item->product_id)->first();
            if ($product->stock < $item->quantity) {
                return back()->withErrors(['error' => "موجودی محصول{$product->name} کافی نیست"]);
            }
        }
    }

    public function createOrder($paymentMethodId, $orderNumber, $totalAmount, $addressId, $deliveryMethodId)
    {
        return Order::query()->create([
            'amount' => $totalAmount,
            'order_number' => $orderNumber,
            'user_id' => Auth::id(),
            'payment_method_id' => $paymentMethodId,
            'address_id' => $addressId,
            'delivery_method_id' => $deliveryMethodId,
        ]);
    }

    public function createOrderItems($cartItem, $orderId)
    {
        foreach ($cartItem as $item) {
            $product = Product::query()->where('id', $item->product_id)->first();
            OrderItem::query()->create([
                'quantity' => $item->quantity,
                'price' => $product->price,
                'order_id' => $orderId,
                'product_id' => $item->product_id,
            ]);
        }
    }

    public function createPayment($orderId, $orderNumber, $totalAmount)
    {
        Payment::query()->create([
            'order_id' => $orderId,
            'user_id' => Auth::id(),
            'amount' => $totalAmount,
            'order_number' => $orderNumber,

        ]);
    }

    public function submitOrderBeforPayment($cartItem, $paymentMethodId, $orderNumber, $totalAmount, $addressId, $deliveryMethodId)
    {
        // check cart items quantity
        $this->checkQuantity($cartItem);

        DB::transaction(function () use ($cartItem, $paymentMethodId, $orderNumber, $totalAmount, $addressId, $deliveryMethodId) {
            //insert to order table
            $order = $this->createOrder($paymentMethodId, $orderNumber, $totalAmount, $addressId, $deliveryMethodId);
            //insert to orderItem table
            $this->createOrderItems($cartItem, $order->id);

            //insert to payment table
            $this->createPayment($order->id, $orderNumber, $totalAmount);
        });
    }

    public function submitOrder($paymentGetWay, $totalAmount, $addressId, $deliveryMethodId)
    {
        $cartItem = Cart::query()->where('User_id', Auth::id())->get();
        $orderNumber = 'Ref-' . Str::uuid()->toString();
        $this->submitOrderBeforPayment($cartItem, $paymentGetWay->getPaymentMethodId(), $orderNumber, $totalAmount, $addressId, $deliveryMethodId);
        return $paymentGetWay->request($totalAmount, $orderNumber);
    }
}
