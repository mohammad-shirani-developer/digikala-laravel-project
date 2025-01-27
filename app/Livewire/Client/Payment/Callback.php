<?php

namespace App\Livewire\Client\Payment;

use App\Traits\PaymentGetWay;
use Livewire\Component;

class Callback extends Component
{
    use PaymentGetWay;

    public function mount()
    {
        $this->zibalVerify();
    }
    public function render()
    {
        return view('livewire.client.payment.callback');
    }
}
