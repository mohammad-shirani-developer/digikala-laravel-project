<?php

use App\Livewire\Client\Auth\Index as authIndex;
use App\Livewire\Client\Home\Index as homeIndex;
use Illuminate\Support\Facades\Route;

Route::name('client.')->group(function () {
    Route::get('/',  homeIndex::class)->name('home');
    Route::get('/auth',  authIndex::class)->name('auth.index');
    Route::get('/gmail',  [authIndex::class, 'redirectToProvider'])->name('gmail');
    Route::get('/auth/gmail/callback',  [authIndex::class, 'handelProviderCallback'])->name('gmail.callback');
});
