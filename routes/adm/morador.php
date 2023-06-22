<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmController;

//cadastrarMoradorFRM

Route::controller(AdmController::class)->prefix('adm')->group(function(){
    Route::get('/cadastrar-morador','cadastrarMoradorFRM')->name('adm-cadastrar-morador');
});
