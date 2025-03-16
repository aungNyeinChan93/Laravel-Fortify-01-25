<?php

use App\Http\Controllers\HomeController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::redirect('/home', '/', );
Route::group(['prefix' => '', 'middleware' => ['auth', 'verified']], function () {
    Route::get('home', [HomeController::class, 'home'])->name('home');
});


Route::get('mail', function () {
    Mail::to('aung@gmail.com')->send(new TestMail());
    dump('success');
});





