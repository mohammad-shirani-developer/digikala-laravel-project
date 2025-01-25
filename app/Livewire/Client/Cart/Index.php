<?php

namespace App\Livewire\Client\Cart;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{

    public $cartItems = [];

    public function mount()
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
    }

    public function render()
    {
        return view('livewire.client.cart.index')->layout('layouts.client.app-v2');
    }
}
