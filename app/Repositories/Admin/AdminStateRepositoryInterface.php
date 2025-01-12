<?php

namespace App\Repositories\Admin;



interface AdminStateRepositoryInterface
{
    public function submit($FormData, $stateId);
}
