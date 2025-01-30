<?php

use App\Livewire\Seller\Auth\Index as authIndex;
use Illuminate\Support\Facades\Route;

Route::name('seller.')->group(function () {

    
    Route::get('/auth',  authIndex::class)->name('auth.login')->middleware('guest:admin');
    Route::get('/logout',  [authIndex::class,'logout'])->name('logout')->middleware('auth:admin');




});
