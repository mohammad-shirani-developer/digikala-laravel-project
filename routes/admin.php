<?php

use App\Livewire\Admin\AdminUser\Index as adminUserindex;
use App\Livewire\Admin\Auth\Index as authIndex;
use App\Livewire\Admin\Dashboard\Index as dashboardIndex;
use App\Livewire\Admin\Country\Index as countryIndex;
use App\Livewire\Admin\State\Index as stateIndex;
use App\Livewire\Admin\City\Index as cityIndex;
use App\Livewire\Admin\Category\Index as categoryIndex;
use App\Livewire\Admin\Category\Features;
use App\Livewire\Admin\Category\FeatureValue;
use App\Livewire\Admin\Delivery\Index as deliveryIndex;
use App\Livewire\Admin\Order\Index as orderIndex;
use App\Livewire\Admin\Order\Details as orderDetails;
use App\Livewire\Admin\Payment\Index as paymentIndex;
use App\Livewire\Admin\Product\CkUpload;
use App\Livewire\Admin\Product\Content;
use App\Livewire\Admin\Product\Create;
use App\Livewire\Admin\Product\Features as productFeatures;
use App\Livewire\Admin\Product\Index as productIndex;
use App\Livewire\Admin\Slider\Index as sliderIndex;
use App\Livewire\Admin\Story\Index as storyIndex;
use App\Livewire\Admin\Transaction\Index as transactionIndex;
use App\Livewire\Admin\User\Index as userIndex;
use Illuminate\Support\Facades\Route;

Route::name('admin.')->group(function () {

    
    Route::get('/auth',  authIndex::class)->name('auth.login')->middleware('guest:admin');
    Route::get('/logout',  [authIndex::class,'logout'])->name('logout')->middleware('auth:admin');



    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard',  dashboardIndex::class)->name('dashboard.index')->middleware(['role:super admin']);
        Route::get('/country', countryIndex::class)->name('country.index');
        Route::get('/state', stateIndex::class)->name('state.index');
        Route::get('/city', cityIndex::class)->name('city.index');
        Route::get('/category', categoryIndex::class)->name('category.index');
        Route::get('/category/{category}/features', Features::class)->name('category.features');
        Route::get('/category/features/{categoryFeature}/values', FeatureValue::class)->name('category.features.values');


        // product

        Route::get('/product', productIndex::class)->name('product.index')->middleware(['role:product admin']);
        Route::get('/product/create', Create::class)->name('product.create')->middleware(['role:product admin']);
        Route::get('/product/feature/{product}', productFeatures::class)->name('product.features')->middleware(['role:product admin']);
        Route::get('/product/content/{product}', Content::class)->name('product.content')->middleware(['role:product admin']);

        Route::post('/ck-upload,{productId}', [CkUpload::class, 'upload'])->name('ck-upload');

        Route::get('/delivery', deliveryIndex::class)->name('delivery.index');

        Route::get('/payment', paymentIndex::class)->name('payment.index');


        Route::get('/story', storyIndex::class)->name('story.index');


        Route::get('/slider', sliderIndex::class)->name('slider.index');

        Route::get('/order', orderIndex::class)->name('order.index')->middleware(['role:order admin|product admin']);

        Route::get('/order/{order}', orderDetails::class)->name('order.details')->middleware(['role:order admin']);

        Route::get('/transaction', transactionIndex::class)->name('transaction.index');

        //user

        Route::get('/user', userIndex::class)->name('user.index');
        Route::get('/admin-user', adminUserindex::class)->name('admin-user.index');

    });
});
