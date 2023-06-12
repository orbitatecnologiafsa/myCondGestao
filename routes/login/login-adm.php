<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessaoController;


Route::controller(SessaoController::class)->group(function(){
    Route::get('/','loginFMR')->middleware('guest');
    Route::post('/login','postLogin')->name('login')->middleware('guest');
    Route::get('/reset-password','resetSenhaFRM')->name('reset-senha')->middleware('guest');
});
