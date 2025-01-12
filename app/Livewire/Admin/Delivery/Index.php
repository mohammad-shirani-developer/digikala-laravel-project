<?php

namespace App\Livewire\Admin\Delivery;

use App\Models\DeliveryMethod;
use App\Repositories\Admin\AdminDeliveryRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $deliveryId;
    public $name;
    public $price;

    private $repository;


    public function boot(AdminDeliveryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function submit($FormData)
    {

        $validator = Validator::make($FormData, [
            'name' => 'required|string|max:30',
            'price' => 'required|numeric',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.max' => 'حداکثر تعداد کاراکترها : 30',
            'price.numeric' => 'قیمت باید به صورت عددی باشد',
        ]);
        $validator->validate();
        $this->resetValidation();
        $this->repository->submit($FormData, $this->deliveryId);
        $this->reset();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function edit($delivery_id)
    {
        $delivery = DeliveryMethod::query()->where('id', $delivery_id)->first();
        if ($delivery) {
            $this->name = $delivery->name;
            $this->price = $delivery->price;
            $this->deliveryId = $delivery->id;
        }
    }

    public function delete($delivery_id)
    {
        DeliveryMethod::query()->where('id', $delivery_id)->delete();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function render()
    {
        $deliveries = DeliveryMethod::query()->paginate(10);
        return view('livewire.admin.delivery.index', [
            'deliveries' => $deliveries
        ])->layout('layouts.admin.app');
    }
}
