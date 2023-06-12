<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessaoController;


Route::controller(SessaoController::class)->prefix('adm')->group(function(){
    Route::get('/','admLoginFMR')->middleware('guest');
    Route::post('/login','admPostLogin')->name('adm-login')->middleware('guest');
    Route::post('/logout','admLogoutPost')->name('adm-logout');
   // Route::get('/reset-password','resetSenhaFRM')->name('reset-senha')->middleware('guest');
});
