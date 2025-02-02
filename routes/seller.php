<?php

use App\Livewire\Seller\Auth\Index as authIndex;
use App\Livewire\Seller\Dashboard\Index as dashboardIndex;
use Illuminate\Support\Facades\Route;

use App\Livewire\Seller\Product\CkUpload;
use App\Livewire\Seller\Product\Content;
use App\Livewire\Seller\Product\Create;
use App\Livewire\Seller\Product\Features as productFeatures;
use App\Livewire\Seller\Product\Index as productIndex;

Route::name('seller.')->group(function () {

    
    Route::get('/auth',  authIndex::class)->name('auth.login')->middleware('guest:admin');
    Route::get('/logout',  [authIndex::class,'logout'])->name('logout')->middleware('auth:admin');

    Route::middleware('auth:seller')->group(function () {
        Route::get('/dashboard',  dashboardIndex::class)->name('dashboard.index');

        Route::get('/product', productIndex::class)->name('product.index');
        Route::get('/product/create', Create::class)->name('product.create');
        Route::get('/product/feature/{product}', productFeatures::class)->name('product.features');
        Route::get('/product/content/{product}', Content::class)->name('product.content');

        Route::post('/ck-upload,{productId}', [CkUpload::class, 'upload'])->name('ck-upload');

    


      

    });




});
