<?php

namespace App\Livewire\Client\Cart;

use App\Models\Cart;
use App\Repositories\Client\cart\ClientCartRepositoryInterface;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    use SEOTools;


    public $cartItems = [];
    public $invoice = [];
    public $outOfStock = false;

    private $repository;
    public function boot(ClientCartRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount()
    {
        $this->seoConfig();
    
    }

    public function seoConfig()
    {
        $this->seo()->setTitle('سبد خرید شما')->setDescription('هر آنچه که نیاز دارید با بهترین قیمت از دیجی‌کالا بخرید!');
    
    }


    public function updateCartQuantity($itemId, $action)
    {
        $this->outOfStock = $this->repository->updateCartQuantity($itemId, $action);
    }

    public function render()
    {
        $dataCart = $this->repository->getCartWithCalculations();
        $this->cartItems = $dataCart['cartItems'];
        $this->invoice = $dataCart['invoice'];

        return view('livewire.client.cart.index')->layout('layouts.client.app-v2');
    }
}
