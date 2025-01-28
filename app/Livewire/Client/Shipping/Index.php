<?php

namespace App\Livewire\Client\Shipping;

use App\Contracts\PaymentGetWayInterface;
use App\Models\Address;
use App\Models\City;
use App\Models\Coupon;
use App\Models\DeliveryMethod;
use App\Models\State;
use App\Repositories\Client\shipping\ClientShippingRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{
    
    public $deliveries = [];
    public $addressList = [];
    public $addressId = 0;
    public $provinces = [];
    public $cities = [];

    //Edit address properties

    public $address = '';
    public $city = '';
    public $province = '';
    public $postalCode = '';
    public $mobile = '';

    //invoice properties
    public $totalProductCount = 0;
    public $totalOriginalPrice = 0;
    public $totalDiscount = 0;
    public $totalDiscountedPrice = 0;

    public $deliveryPrice = 0;
    public $deliveryMethodId;

    public $totalAmount = 0;

    public $discountCodeAmount = 0;

    public $showDiscountcode = false;

    private $repository;
    public function boot(ClientShippingRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount()
    {



        if (Session::get('invoiceFromCart')) {
            $invoice = Session::get('invoiceFromCart');
            $this->totalProductCount = $invoice['totalProductCount'];
            $this->totalOriginalPrice = $invoice['totalOriginalPrice'];
            $this->totalDiscount = $invoice['totalDiscount'];
            $this->totalDiscountedPrice = $invoice['totalDiscountedPrice'];
        };

        $this->deliveries = DeliveryMethod::all();
        $this->deliveryPrice = $this->deliveries->first()->price;
        $this->deliveryMethodId = $this->deliveries->first()->id;

        $this->totalAmountForPayment($this->totalDiscountedPrice, $this->deliveryPrice, $this->discountCodeAmount);
    }

    public function totalAmountForPayment($totalDiscountedPrice, $deliveryPrice, $discountCodeAmount)
    {
        $this->totalAmount = ($totalDiscountedPrice + $deliveryPrice) - $discountCodeAmount;
    }

    public function getAddressId($addressId)
    {
        $this->addressId = Address::query()->where([
            'user_id' => Auth::id(),
            'id' => $addressId
        ])->first()->id;
    }

    public function changeDeliveryPrice($deliveryId)
    {
        $this->deliveryMethodId = $deliveryId;
        $this->deliveryPrice = DeliveryMethod::query()->where('id', $deliveryId)->pluck('price')->first();
        $this->totalAmountForPayment($this->totalDiscountedPrice, $this->deliveryPrice, $this->discountCodeAmount);
    }

    public function submit($FormData)
    {
        $validator = Validator::make($FormData, [
            'address' => 'required|string|min:10|max:100',
            'province' => 'required|exists:states,id',
            'city' => 'required|exists:cities,id',
            'postalCode' => ['required', 'regex:/^[1-9][0-9]{9}$/'],
            'mobile' => ['required', 'regex:/^09[0-9]{9}$/'],
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.max' => 'حداکثر تعداد کاراکترها : 100',
            '*.min' => 'حداکثر تعداد کاراکترها : 10',
            'province.exists' => 'استان نامعتبر است .',
            'city.exists' => 'شهر نامعتبر است .',
            'postalCode.regex' => 'کد پستی باید یک عدد ۱۰ رقمی باشد که با صفر شروع نشود.',
            'mobile.regex' => 'شماره موبایل باید با 09 شروع شود و دقیقاً 11 رقم باشد.',
        ]);
        $validator->validate();
        $this->resetValidation();
        Address::query()->updateOrCreate([
            'id' => $this->addressId,
        ], [
            'mobile' => $FormData['mobile'],
            'address' => $FormData['address'],
            'state_id' => $FormData['province'],
            'city_id' => $FormData['city'],
            'country_id' => 1,
            'postal_code' => $FormData['postalCode'],
            'user_id' => Auth::id()
        ]);

        // $this->repository->submit($FormData, $this->cityId);
        $this->dispatch('close-modal');
    }

    public function getProvinces($type)
    {
        if ($type == 'add') {
            $this->reset();
        }

        $this->provinces = State::all();
    }

    public function getCity($value)
    {
        $this->cities = City::query()->where('state_id', $value)->get();
    }

    public function editAddress($addressId)
    {
        $this->addressId = $addressId;
        $addressDetails = Address::query()->where('id', $addressId)->first();
        if ($addressDetails) {
            $this->address = $addressDetails->address;
            $this->mobile = $addressDetails->mobile;
            $this->postalCode = $addressDetails->postal_code;
            $this->getProvinces('edit');
            $this->province = $addressDetails->state_id;
            $this->getCity($this->province);
            $this->city = $addressDetails->city_id;
        }
    }

    public function checkDiscountCode($FormData)
    {
        $validator = Validator::make($FormData, [
            'code' => 'required|string|exists:coupons,code|min:4|max:6',

        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.max' => 'حداکثر تعداد کاراکترها : 6',
            '*.min' => 'حداکثر تعداد کاراکترها : 4',
            'code.exists' => 'کد نامعتبر است .',


        ]);

        $validator->validate();
        $this->resetValidation();

        $code = Coupon::query()->where('code', $FormData['code'])->first();

        $this->applyDiscount($code);
    }

    public function applyDiscount($code)
    {
        if (!$code->is_active || Carbon::parse($code->expires_at)->isPast()) {
            session()->flash('error', '.این کد معتبر نیست یا منقضی شده است');
            return;
        }

        if ($this->totalAmount < $code->min_purchase || $code->limit <= 0) {
            session()->flash('error', 'شرایط استفاده از این کد تخفیف برقرار نیست');
            return;
        }

        $this->discountCodeAmount = $discount = $code->type == 'percent' ? ($this->totalDiscountedPrice *  $code->value) / 100 : $code->value;

        $this->totalAmountForPayment($this->totalDiscountedPrice, $this->deliveryPrice, $discount);

        $this->showDiscountcode = true;

        session()->flash('success', 'کد با موفقیت اعمال شد');
    }

    //payment methods

    public function checkQuantity($cartItem)
    {
        $this->repository->checkQuantity($cartItem);
    }

    public function createOrder($paymentMethodId, $orderNumber)
    {
     return  $this->repository->createOrder($paymentMethodId, $orderNumber,$this->totalAmount,$this->addressId,$this->deliveryMethodId);
    }

    public function createOrderItems($cartItem, $orderId)
    {
     $this->repository->createOrderItems($cartItem, $orderId);
    }

    public function createPayment($orderId,$orderNumber)
    {
       $this->repository->createPayment($orderId,$orderNumber,$this->totalAmount);
    }

    public function submitOrderBeforPayment($cartItem, $paymentMethodId, $orderNumber)
    {
        $this->repository->submitOrderBeforPayment($cartItem, $paymentMethodId, $orderNumber,$this->totalAmount,$this->addressId,$this->deliveryMethodId);

       
    }

    public function submitOrder(PaymentGetWayInterface $paymentGetWay)
    {
        $this->repository->submitOrder( $paymentGetWay,$this->totalAmount,$this->addressId,$this->deliveryMethodId);
       
    }

    public function render()
    {
        $addresList = $this->addressList = Address::query()->where('user_id', Auth::id())->latest()->get();
        $this->addressId = $addresList->first()->id;

        return view('livewire.client.shipping.index')->layout('layouts.client.app-v2');
    }
}
