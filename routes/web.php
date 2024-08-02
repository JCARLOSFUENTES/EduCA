<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\ProfileController;
use Illuminate\Support\Facades\Route;

// Ruta de la Landing Page
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

// Rutas de Inicio de Sesión
Route::controller(LoginController::class)->group(function(){

    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'store')->name('login.store');

});

// Ruta de cierre de sesión
Route::controller(LogoutController::class)->group(function(){

    Route::post('/logout', 'store')->name('logout.store');

});

// Ruta Home
Route::controller(HomeController::class)->group(function(){

    Route::get('/home', 'index')->name('home.index');

});

// Rutas del Perfil
Route::controller(ProfileController::class)->group(function(){

    Route::get('/{user:username}', 'index')->name('profile.index');

});
