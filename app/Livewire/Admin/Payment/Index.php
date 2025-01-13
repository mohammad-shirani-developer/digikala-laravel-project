<?php

namespace App\Livewire\Admin\Payment;

use App\Models\PaymentMethod;
use App\Repositories\Admin\AdminPaymentRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $paymentId;
    public $name;
    public $merchentId;

    private $repository;


    public function boot(AdminPaymentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function submit($FormData)
    {

        $validator = Validator::make($FormData, [
            'name' => 'required|string|max:30',
            'merchentId' => 'nullable',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.max' => 'حداکثر تعداد کاراکترها : 30',
        ]);
        $validator->validate();
        $this->resetValidation();
        $this->repository->submit($FormData, $this->paymentId);
        $this->reset();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function edit($payment_id)
    {
        $payment = PaymentMethod::query()->where('id', $payment_id)->first();
        if ($payment) {
            $this->name = $payment->name;
            $this->merchentId = $payment->merchent_id;
            $this->paymentId = $payment->id;
        }
    }

    public function delete($payment_id)
    {
        PaymentMethod::query()->where('id', $payment_id)->delete();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function render()
    {

        $payments = PaymentMethod::query()->paginate(10);
        return view('livewire.admin.payment.index', [
            'payments' => $payments
        ])->layout('layouts.admin.app');
    }
}
