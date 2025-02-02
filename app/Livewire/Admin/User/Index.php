<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $search = '';

    public function render()
    {

        $users = User::query()
            ->withCount('orders')
            ->latest();

        if ($this->search) {

            $users->where('name', 'Like', '%' . $this->search . '%')
                ->orWhere('mobile', 'Like', '%' . $this->search . '%')
                ->orWhere('email', 'Like', '%' . $this->search . '%');
        }
        return view('livewire.admin.user.index',[
            'users'=>$users->paginate(10)
        ])->layout('layouts.admin.app');
    }
}
