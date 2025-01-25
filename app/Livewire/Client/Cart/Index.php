<?php

namespace App\Livewire\Client\Cart;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{

    public $cartItems = [];
    public $invoice = [];
    public $outOfStock = false;

    public function updateCartQuantity($itemId, $action)
    {
        $cartItem = Cart::query()->where('id', $itemId)
            ->with('product:id,stock')
            ->first();

        if (!$cartItem) {
            return 'محصول مورد نظر در سبد خرید یافت نشد';
        }

        if ($action == 'increment') {
            if ($cartItem->quantity < $cartItem->product->stock) {
                $cartItem->increment('quantity');
            } else {
                $this->outOfStock = true;
            }
        } elseif ($action == 'decrement') {
            $cartItem->decrement('quantity');

            if ($cartItem->quantity < 1) {
                $cartItem->delete();
            }
        }
    }

    public function render()
    {

        $this->cartItems = Cart::query()->where('user_id', Auth::id())
            ->with('product:id,name,price,discount,stock,seller_id,p_code,featured')
            ->get()
            ->map(function ($item) {
                $product = $item->product;
                // قیمت اصلی هر محصول
                $originalPrice = $product->price * $item->quantity;
                // محاسبه میزان تخفیف
                $discounAmoun = $product->discount ? ($product->price * $product->discount / 100) * $item->quantity : 0;
                // قیمت نهایی پس از تخفیف
                $discountedPrice = $originalPrice - $discounAmoun;

                $item->originalPrice = $originalPrice;
                $item->discounAmoun = $discounAmoun;
                $item->discountedPrice = $discountedPrice;

                return $item;
            });

        $this->invoice = [
            'totalProductCount' => $this->cartItems->count(),
            'totalOriginalPrice' => $this->cartItems->sum('originalPrice'),
            'totalDiscount' => $this->cartItems->sum('discounAmoun'),
            'totalDiscountedPrice' => $this->cartItems->sum('discountedPrice'),
        ];

        return view('livewire.client.cart.index')->layout('layouts.client.app-v2');
    }
}
