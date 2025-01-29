<?php

namespace App\Repositories\Admin;



interface AdminOrderRepositoryInterface
{
    public function getStatusColor($status);

    public function getOrdersWithFilters($search=null,$status=null);
    
    public function getOrderDatails($order);


}
