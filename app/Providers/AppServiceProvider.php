<?php

namespace App\Providers;

use App\Repositories\Admin\AdminCategoryRepository;
use App\Repositories\Admin\AdminCategoryRepositoryInterface;
use App\Repositories\Admin\AdminCityRepository;
use App\Repositories\Admin\AdminCityRepositoryInterface;
use App\Repositories\Admin\AdminCountryRepository;
use App\Repositories\Admin\AdminCountryRepositoryInterface;
use App\Repositories\Admin\AdminDeliveryRepository;
use App\Repositories\Admin\AdminDeliveryRepositoryInterface;
use App\Repositories\Admin\AdminPaymentRepository;
use App\Repositories\Admin\AdminPaymentRepositoryInterface;
use App\Repositories\Admin\AdminProductRepository;
use App\Repositories\Admin\AdminProductRepositoryInterface;
use App\Repositories\Admin\AdminSliderRepository;
use App\Repositories\Admin\AdminSliderRepositoryInterface;
use App\Repositories\Admin\AdminStateRepository;
use App\Repositories\Admin\AdminStateRepositoryInterface;
use App\Repositories\Admin\AdminStoryRepository;
use App\Repositories\Admin\AdminStoryRepositoryInterface;
use App\Repositories\client\ClientAuthRepository;
use App\Repositories\Client\ClientAuthRepositoryInterface;
use App\Repositories\client\first_page\ClientFirstPageRepository;
use App\Repositories\client\first_page\ClientFirstPageRepositoryInterface;
use App\Repositories\client\product\ClientProductRepository;
use App\Repositories\client\product\ClientProductRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(AdminProductRepositoryInterface::class, AdminProductRepository::class);
        $this->app->singleton(AdminCategoryRepositoryInterface::class, AdminCategoryRepository::class);
        $this->app->singleton(AdminCityRepositoryInterface::class, AdminCityRepository::class);
        $this->app->singleton(AdminCountryRepositoryInterface::class, AdminCountryRepository::class);
        $this->app->singleton(AdminStateRepositoryInterface::class, AdminStateRepository::class);
        $this->app->singleton(AdminDeliveryRepositoryInterface::class, AdminDeliveryRepository::class);
        $this->app->singleton(AdminPaymentRepositoryInterface::class, AdminPaymentRepository::class);
        $this->app->singleton(AdminStoryRepositoryInterface::class, AdminStoryRepository::class);
        $this->app->singleton(AdminSliderRepositoryInterface::class, AdminSliderRepository::class);

        //Client
        $this->app->singleton(ClientAuthRepositoryInterface::class, ClientAuthRepository::class);
        $this->app->singleton(ClientFirstPageRepositoryInterface::class, ClientFirstPageRepository::class);
        $this->app->singleton(ClientProductRepositoryInterface::class, ClientProductRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
