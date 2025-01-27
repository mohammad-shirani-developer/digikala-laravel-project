<?php

namespace App\Providers;

use App\Contracts\PaymentGetWayInterface;
use App\Models\PaymentMethod;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(PaymentGetWayInterface::class, function () {
            $activePayment = PaymentMethod::query()->where('is_active', true)->first();
            $getWayClass = 'App\\Servies\\PaymentGatWay\\' . $activePayment->name;

            if (!$activePayment || !class_exists($getWayClass)) {
                throw new \Exception('Active Payment getway not found or invalide class');
            }
            return new $getWayClass;
        });
    }
}
