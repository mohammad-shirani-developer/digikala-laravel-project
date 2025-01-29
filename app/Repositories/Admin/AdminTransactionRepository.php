<?php

namespace App\Repositories\Admin;

use App\Models\Order;
use App\Models\Payment;

class AdminTransactionRepository implements AdminTransactionRepositoryInterface
{
    public function getTransactionsWithFilters($search = null, $status = null)
    {
        $query = Payment::query()
        ->with('order')
        ->latest();

        if ($search) {

            $query->where('order_number', 'Like', '%' . $search . '%')
            ->orWhere('refNumber', 'Like', '%' . $search . '%')
            ->orWhere('cardNumber', 'Like', '%' . $search . '%');
                
         }




        // ->latest();


        if ($status && $status != 'all') {
            $query->where('status', $status);
        }

        return $query->latest();

    }


    public function transformQuery($transactions)
    {
       return $transactions->getCollection()->transform(function ($item) {
           
            $item->statusPaymentColor = $this->getStatusColor($item->status);

            return $item;
        });
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


    

}
