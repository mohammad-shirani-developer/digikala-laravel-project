<?php

namespace App\Livewire\Client\Shipping;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.client.shipping.index')->layout('layouts.client.app-v2');
    }
}
