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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('middleware', function () {
    return "Has accedido correctamente a esta ruta.";
})->middleware(['auth:sanctum', 'age']); //age es el alias registrado en Kernel.php

Route::get('no-autorizado', function () {
    return "Usted no está autorizado para ver este contenido.";
});