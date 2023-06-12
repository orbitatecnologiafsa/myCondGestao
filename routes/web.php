<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__.'/login/login-master.php';
require __DIR__.'/adm/adm-master.php';
require __DIR__.'/porteiro/porteiro-master.php';
require __DIR__.'/sindico/sindico-master.php';

// Route::get('/', function () {
//     return view('welcome');
// });
