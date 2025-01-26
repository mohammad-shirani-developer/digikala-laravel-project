<?php

namespace App\Repositories\client\cart;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ClientCartRepository implements ClientCartRepositoryInterface
{
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
                return true;
            }
        } elseif ($action == 'decrement') {
            $cartItem->decrement('quantity');

            if ($cartItem->quantity < 1) {
                $cartItem->delete();
            }
            return false;
        }
    }

    public function getCartWithCalculations()
    {
        $cartItems = Cart::query()->where('user_id', Auth::id())
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

        $invoice = [
            'totalProductCount' => $cartItems->count(),
            'totalOriginalPrice' => $cartItems->sum('originalPrice'),
            'totalDiscount' => $cartItems->sum('discounAmoun'),
            'totalDiscountedPrice' => $cartItems->sum('discountedPrice'),
        ];

        return compact('cartItems', 'invoice');
    }
}
