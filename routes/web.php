<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\InicioController;
use  App\Http\Controllers\PruebaController; 

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

Route::get('/',   InicioController::class   );


Route::controller(PruebaController::class)->group(function () {
    Route::get('pruebas','p');
    Route::get('pruebas/prueba1', 'p1');
    Route::get('prueba/prueba2','p2');
});




