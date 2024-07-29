<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Ruta de Registro
// Route::get('/registro', [RegisterController::class, 'index'])->name('register');

// Rutas de Registro
Route::controller(RegisterController::class)->group(function(){

    Route::get('/registro', 'index')->name('register.index');
    Route::post('/registro', 'store')->name('register.store');

});

// Ruta Home
Route::controller(HomeController::class)->group(function(){

    Route::get('/home', 'index')->name('home.index');

});
