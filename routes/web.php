<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::redirect('/home', '/', );
Route::group(['prefix' => '', ['middleware' => 'auth']], function () {
    Route::get('home', [HomeController::class, 'home'])->name('home');
});






