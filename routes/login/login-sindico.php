<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessaoController;


Route::controller(SessaoController::class)->prefix('sindico')->group(function () {
    Route::get('/', 'sindicoLoginFMR')->middleware('guest');
    Route::post('/login', 'sindicoPostLogin')->name('sind-login')->middleware('guest');
    Route::post('/logout', 'sindicoLogoutPost')->name('sind-logout');
    // Route::get('/reset-password','resetSenhaFRM')->name('reset-senha')->middleware('guest');
});
