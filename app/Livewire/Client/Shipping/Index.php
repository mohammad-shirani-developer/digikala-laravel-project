<?php

namespace App\Livewire\Client\Shipping;

use App\Models\Address;
use App\Models\DeliveryMethod;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $deliveries = [];
    public $addressList = [];

    public function mount()
    {
        $this->deliveries = DeliveryMethod::all();
        $this->addressList=Address::query()->where('user_id',Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.client.shipping.index')->layout('layouts.client.app-v2');
    }
}
