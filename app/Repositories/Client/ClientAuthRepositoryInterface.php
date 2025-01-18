<?php

namespace App\Repositories\Client;



interface ClientAuthRepositoryInterface
{
    public function checkUser($gmailUser);
}
