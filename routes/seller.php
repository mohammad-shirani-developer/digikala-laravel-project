<?php

use App\Livewire\Seller\Auth\Index as authIndex;
use App\Livewire\Seller\Dashboard\Index as dashboardIndex;
use Illuminate\Support\Facades\Route;

Route::name('seller.')->group(function () {

    
    Route::get('/auth',  authIndex::class)->name('auth.login')->middleware('guest:admin');
    Route::get('/logout',  [authIndex::class,'logout'])->name('logout')->middleware('auth:admin');

    Route::middleware('auth:seller')->group(function () {
        Route::get('/dashboard',  dashboardIndex::class)->name('dashboard.index');
    


      

    });




});
