<?php

namespace App\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Seller;
use Livewire\Component;
use Illuminate\Support\Str;


class Create extends Component
{
    public $categories = [];
    public $sellers = [];
    public $name;
    public $slug;

    public function mount()
    {
        $this->categories = Category::all();
        $this->sellers = Seller::query()->select('id', 'shop_name')->get();
    }

    public function updatedName()
    {
        $this->slug = Str::slug($this->name, '-', null);
    }

    public function render()
    {
        return view('livewire.admin.product.create')->layout('layouts.admin.app');
    }
}
