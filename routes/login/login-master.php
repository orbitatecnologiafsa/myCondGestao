<?php

use App\Http\Controllers\SessaoController;
use Illuminate\Support\Facades\Route;



Route::controller(SessaoController::class)->group(function(){
    Route::get('/','loginFMR')->middleware('guest');
    Route::post('/login','postLogin')->name('login')->middleware('guest');
    Route::get('/reset-password','resetSenhaFRM')->name('reset-senha')->middleware('guest');
});
