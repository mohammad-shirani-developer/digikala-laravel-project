<?php

namespace App\Livewire\Admin\Order;

use App\Models\Order;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search;

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
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
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

    public function render()
    {
        $orders = Order::query()->with('user', 'payment')
            ->when($this->search, function ($query) {
                $query->where('order_number', 'Like', '%' . $this->search . '%')
                    ->orWhereHas('user', function ($query) {
                        $query->where('name', 'Like', '%' . $this->search . '%')
                            ->orWhere('mobile', 'Like', '%' . $this->search . '%')
                            ->orWhere('email', 'Like', '%' . $this->search . '%');
                    });
            })
            ->paginate(10);

        $orders->getCollection()->transform(function ($order) {
            $parts = explode('-', $order->order_number);
            $order->order_number = $parts[2] ?? null;
            $order->statusColor = $this->getStatusColor($order->status);
            $order->statusPaymentColor = $this->getStatusColor($order->payment->status);
            return $order;
        });
        return view('livewire.admin.order.index', [
            'orders' => $orders
        ])->layout('layouts.admin.app');
    }
}
