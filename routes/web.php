<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\UserController; 
use App\Http\Controllers\ProductoController; 

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//direccion
Route::get('/direccion', [UserController::class, "direccionForm"]);
Route::post('/usuario/direccion', [UserController::class, "procesarForm"])->name("procesar.direccion");

//producto

Route::get('/producto', [ProductoController::class, "productoForm"]);
Route::post('/producto/registrar', [ProductoController::class, "procesarForm"])->name("procesar.producto");


Route::get('/pais/{pais}   ', [ProductoController::class, "pais"]);
Route::get('/mostrar', [ProductoController::class, "mostrar"]);