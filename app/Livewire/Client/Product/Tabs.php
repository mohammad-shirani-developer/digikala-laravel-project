<?php

namespace App\Livewire\Client\Product;

use App\Models\Product;
use App\Models\ProductFeatureValue;
use App\Models\ProductReviews;
use App\Models\ProductReviewVote;
use App\Repositories\client\product\ClientProductRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Tabs extends Component
{
    public $productId;
    public $name;
    public $title;
    public $comment;
    public $shortDescription;
    public $longDescription;
    public $activeTab = 0;
    public $productFeatures = [];
    public $ProductReviews = [];

    public $positiveInput = '';
    public $positiveItems = [];

    public $negativeInput = '';
    public $negativeItems = [];

    public $submitSuccessAlert = false;

    private $repository;
    public function boot(ClientProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount()
    {
        app()->setLocale('fa');
        $this->changeTab(1);
    }

    public function changeTab($tabNumber)
    {
        $this->activeTab = $tabNumber;

        $product = Product::query()->where('id', $this->productId);

        if ($tabNumber == 1) {
            $this->shortDescription = $product->pluck('short_description')->first();
        } elseif ($tabNumber == 2) {
            $this->longDescription = $product->pluck('long_description')->first();
        } elseif ($tabNumber == 3) {
            $this->getProductFeatures($this->productId);
        } elseif ($tabNumber == 4) {
            $this->ProductReviews($this->productId);
        }
    }

    public function getProductFeatures($productId)
    {
        $this->productFeatures = $this->repository->getProductFeatures($productId);
    }

    public function ProductReviews($productId)
    {
        $this->ProductReviews = $this->repository->ProductReviews($productId); 
    }

    public function submitReview($FormData)
    {
        $validator = Validator::make($FormData, [
            'title' => 'required|string|max:100|min:10',
            'comment' => 'required|string|max:250|min:10',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            'title.max' => 'حداکثر تعداد کاراکترها : 100',
            'comment.max' => 'حداکثر تعداد کاراکترها : 250',
            '*.min' => 'حداقل تعداد کاراکترها : 10',
        ]);
        $validator->validate();
        $this->resetValidation();

       $this->repository->createProductReview($FormData,$this->positiveItems,$this->negativeItems,$this->productId);

        $this->submitSuccessAlert = true;
        $this->reset('title', 'comment', 'positiveInput', 'negativeInput');
        $this->positiveItems = [];
        $this->negativeItems = [];
    }


    public function setVote($status, $reviewId)
    {
        if (Auth::check()) {
           $this->repository->setVote($status, $reviewId);

            $this->ProductReviews($this->productId);
        } else {
            return redirect()->route('client.auth.index');
        }
    }

    public function addItem($type)
    {
        $inputField = $type === 'positive' ? 'positiveInput' : 'negativeInput';
        $itemField = $type === 'positive' ? 'positiveItems' : 'negativeItems';

        $this->validate([
            $inputField => 'required|min:3|max:60'
        ], [
            $inputField . '.required' => '!فیلد اجباریست',
            $inputField . '.min' => '!حداقل باید 3 کاراکتر باشد',
            $inputField . '.max' => '!حداکثر باید 60 کاراکتر باشد',

        ]);
        $this->{$itemField}[] = $this->{$inputField};
        $this->{$inputField} = '';
    }

    public function removeItem($type, $index)
    {
        $itemField = $type === 'positive' ? 'positiveItems' : 'negativeItems';
        array_splice($this->{$itemField}, $index, 1);
    }

    public function render()
    {
        return view('livewire.client.product.tabs');
    }
}
