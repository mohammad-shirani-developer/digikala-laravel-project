<?php

namespace App\Servies\PaymentGatWay;

use App\Classes\zibal as ClassesZibal;
use App\Contracts\PaymentGetWayInterface;
use App\Models\PaymentMethod;

class Zibal implements PaymentGetWayInterface
{

    public function request($amount)
    {
        $zibal = new ClassesZibal();

        $parameters = array(
            "merchant" => config('services.zibal.merchent'), //required
            "callbackUrl" => route('client.payment.callback'), //required
            "amount" => $amount * 10, //required

            "orderId" => time(), //optional
            "mobile" => "09120000000", //optional for mpg
        );

        $response = $zibal->postToZibal('request', $parameters);

        if ($response->result == 100) {
            $startGateWayUrl = "https://gateway.zibal.ir/start/" . $response->trackId;
            return redirect($startGateWayUrl);
        } else {
            throw new \Exception('Error Code :' . $response->result . '--Message :' . $response->message);
        }
    }

    public function verify($request)
    {
        $zibal = new ClassesZibal();

        if ($_GET['success'] == 1) {
            echo "شناسه سفارش: " . $_GET['orderId'] . "<br>";

            //start verfication
            $parameters = array(
                "merchant" => config('services.zibal.merchent'), //required
                "trackId" => $_GET['trackId'], //required

            );

            $response = $zibal->postToZibal('verify', $parameters);

            if ($response->result == 100) {
                echo "<pre>"; //for pretty view :)
                var_dump($response);
                //update database or something else
            } else {
                throw new \Exception('result :' . $response->result . '--Message :' . $response->message);
            }
        } else {
            echo "پرداخت با شکست مواجه شد.";
        }
    }

    public function getPaymentMethodId()
    {
        return PaymentMethod::query()->where('name','=', 'Zibal')->pluck('id')->first();
    }
}
