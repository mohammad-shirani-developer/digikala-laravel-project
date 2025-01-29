<?php

namespace App\Livewire\Client\Product;

use App\Repositories\client\product\ClientProductRepositoryInterface;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;

class Index extends Component
{
    use SEOTools;
    public $product;

    private $repository;
    public function boot(ClientProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount($p_code)
    {
        $product = $this->repository->getSingleProduct($p_code);

        if ($product) {
            $discountAmount = $product->discount ? ($product->price * $product->discount / 100) : 0;
            $product->finalPrice = $product->price - $discountAmount;
        }
        $this->product = $product;

        $this->seoConfig($product->seoItem);

    }

    public function seoConfig($productSeoItem)
    {
        $this->seo()->setTitle($productSeoItem->meta_title)->setDescription($productSeoItem->meta_description);
    
    }

    public function render()
    {
        return view('livewire.client.product.index');
    }
}
