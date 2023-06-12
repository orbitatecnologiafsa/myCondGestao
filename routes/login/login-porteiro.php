<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessaoController;


Route::controller(SessaoController::class)->prefix('porteiro')->group(function(){
    Route::get('/','porteiroLoginFMR')->middleware('guest');
    Route::post('/login','porteiroPostLogin')->name('port-login')->middleware('guest');
    Route::post('/logout','porteiroLogoutPost')->name('port-logout');
   // Route::get('/reset-password','resetSenhaFRM')->name('reset-senha')->middleware('guest');
});
