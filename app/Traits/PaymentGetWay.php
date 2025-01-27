<?php

namespace App\Traits;

use App\Classes\Zibal;



trait PaymentGetWay
{
   protected function zibalRequest($amount)
   {
    $zibal=new Zibal();

    $parameters = array(
        "merchant"=> 'zibal',//required
        "callbackUrl"=> route('client.payment.callback'),//required
        "amount"=> $amount,//required
    
        "orderId"=> time(),//optional
        "mobile"=> "09120000000",//optional for mpg
    );
    
    $response =$zibal->postToZibal('request', $parameters);
  
    if ($response->result == 100)
    {
        $startGateWayUrl = "https://gateway.zibal.ir/start/".$response->trackId;
        return redirect($startGateWayUrl);
    }
    else{
        Throw new \Exception('Error Code :'.$response->result.'--Message :'.$response->message);
    }
   }
}
