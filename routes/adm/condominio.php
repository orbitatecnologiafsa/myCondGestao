<?php

use App\Http\Controllers\AdmController;
use Illuminate\Support\Facades\Route;


Route::controller(AdmController::class)->prefix('adm')->group(function(){
    Route::get('/cadastrar-condominio','cadastrarCondiminioFMR')->name('adm-cadastrar-condominio');
});
