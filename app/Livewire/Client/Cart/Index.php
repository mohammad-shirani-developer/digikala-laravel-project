<?php

namespace App\Livewire\Client\Cart;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.client.cart.index')->layout('layouts.client.app-v2');
    }
}
