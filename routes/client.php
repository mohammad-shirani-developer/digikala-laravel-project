<?php

use App\Livewire\Client\Auth\Index as authIndex;
use Illuminate\Support\Facades\Route;

Route::name('client.')->group(function () {
    Route::get('/auth',  authIndex::class)->name('auth.index');
    Route::get('/',  authIndex::class)->name('home');
    Route::get('/gmail',  [authIndex::class, 'redirectToProvider'])->name('gmail');
    Route::get('/auth/gmail/callback',  [authIndex::class, 'handelProviderCallback'])->name('gmail.callback');
});
