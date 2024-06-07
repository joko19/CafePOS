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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('auth')->group(function(){
    Route::get('/home', \App\Livewire\Home::class)->name('home');
    Route::get('profile',\App\Livewire\Auth\Profile::class)->name('profile');
});

Route::middleware('guest')->group(function(){
    Route::get('/login',\App\Livewire\Auth\Login::class)->name('login');
});