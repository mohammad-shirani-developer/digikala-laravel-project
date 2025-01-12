<?php

namespace App\Providers;

use App\Repositories\Admin\AdminCategoryRepository;
use App\Repositories\Admin\AdminCategoryRepositoryInterface;
use App\Repositories\Admin\AdminProductRepository;
use App\Repositories\Admin\AdminProductRepositoryInterface;
use App\Repositories\ProductRepository;
use App\Repositories\ProductRepositoryInterface;
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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
