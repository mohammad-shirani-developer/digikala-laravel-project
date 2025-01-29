<?php

namespace App\Repositories\Admin;



interface AdminTransactionRepositoryInterface
{
    public function getStatusColor($status);

    public function getTransactionsWithFilters($search=null,$status=null);
    


}
