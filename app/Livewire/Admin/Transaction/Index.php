<?php

namespace App\Livewire\Admin\Transaction;

use App\Models\Payment;
use App\Repositories\Admin\AdminTransactionRepositoryInterface;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    private $repository;



    public function boot(AdminTransactionRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function render()
    {
        $transactionQuery = $this->repository->getTransactionsWithFilters($this->search, $_GET['status'] ?? 'all');
        $transactions = $transactionQuery->paginate(10);

        $this->repository->transformQuery($transactions);

       
        return view('livewire.admin.transaction.index', [
            'transactions' => $transactions
        ])->layout('layouts.admin.app');
    }
}
