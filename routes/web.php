<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;

Route::get('/', function () {
    return redirect('/login');
});



Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/signup', function () {
    return view('auth.signup');
});

Route::get('/home', function(){
   return view('home');
});


Route::post('/login', [LoginController::class, 'login']
)->name('login.post');

Route::post('/signup', [SignupController::class, 'store']
)->name('signup.post');