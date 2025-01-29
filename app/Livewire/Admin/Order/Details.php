<?php

namespace App\Livewire\Admin\Order;

use App\Models\Order;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Details extends Component
{
    public $orderDetails;
    public $statusColor;

    public function mount(Order $order)
    {

        $orderDetails=$this->orderDetails = $order->load([
            'orderItems.product:id,name,price,p_code',
            'orderItems.product.coverImage:id,path,product_id',
            'payment',
            'paymentMethod',
            'deliveryMethod',
            'address',
            'address.country',
            'address.state',
            'address.city',
        ]);

        $parts = explode('-', $orderDetails->order_number);
        $orderDetails->order_number = $parts[2] ?? null;
        $orderDetails->statusPaymentColor = $this->getStatusColor( $orderDetails->payment->status);
        $this->statusColor=$this->getStatusColor($orderDetails->status);


    }

    public function getStatusColor($status)
    {
        switch ($status) {
            case 'pending':
                return 'primary';
            case 'processing':
                return 'info';
            case 'completed':
                return 'success';
            case 'canceled':
                return 'danger';
        }
    }

    public function changeStatus(Order $order, $value)
    {
        $validator = Validator::make(['status' => $value, 'id' => $order->id], [
            'status' => 'required|in:pending,processing,completed,canceled',
            'id' => 'required|exists:orders,id'
        ], [
            '*.required' => 'فیلد ضروری است.',
            'status.in' => 'مقدار وارد شده اشتباه است!',
            'id.exists' => 'سفارش نامعتبر است!',

        ]);

        $validator->validate();
        $this->resetValidation();

        $order->update(['status' => $value]);
        $this->statusColor=$this->getStatusColor($order->status);
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function render()
    {
        return view('livewire.admin.order.details')->layout('layouts.admin.app');
    }
}
