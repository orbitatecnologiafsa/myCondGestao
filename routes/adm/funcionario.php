<?php

use App\Http\Controllers\AdmController;
use Illuminate\Support\Facades\Route;



Route::controller(AdmController::class)->prefix('adm')->group(function(){
    Route::get('/cadastrar-funcionario','cadastrarFuncionarioFRM')->name('adm-cadastrar-funcionario');
});
