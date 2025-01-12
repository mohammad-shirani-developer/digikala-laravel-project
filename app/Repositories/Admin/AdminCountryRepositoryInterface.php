<?php

namespace App\Repositories\Admin;



interface AdminCountryRepositoryInterface
{
    public function submit($FormData, $countryId);
}
