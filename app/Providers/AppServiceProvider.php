<?php

namespace App\Providers;

use App\Repositories\Admin\AdminCategoryRepository;
use App\Repositories\Admin\AdminCategoryRepositoryInterface;
use App\Repositories\Admin\AdminCityRepository;
use App\Repositories\Admin\AdminCityRepositoryInterface;
use App\Repositories\Admin\AdminCountryRepository;
use App\Repositories\Admin\AdminCountryRepositoryInterface;
use App\Repositories\Admin\AdminProductRepository;
use App\Repositories\Admin\AdminProductRepositoryInterface;
use App\Repositories\Admin\AdminStateRepository;
use App\Repositories\Admin\AdminStateRepositoryInterface;
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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
