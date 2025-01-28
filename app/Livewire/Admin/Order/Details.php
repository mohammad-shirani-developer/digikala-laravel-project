<?php

namespace App\Livewire\Admin\Order;

use Livewire\Component;

class Details extends Component
{
    public function render()
    {
        return view('livewire.admin.order.details')->layout('layouts.admin.app');
    }
}
