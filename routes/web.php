<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(\App\Http\Controllers\UserController::class)->group(function(){
    Route::get('login', 'login')->name('login');
    Route::post('login', 'authenticate')->name('authenticate');
    Route::get('register', 'register')->name('register');
    Route::post('register', 'store')->name('store');
});

Route::controller(\App\Http\Controllers\BlogController::class)->group(function(){
    Route::get('/', 'index');
});
