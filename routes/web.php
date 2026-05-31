<?php

use App\Http\Controllers\ListController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});



Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/signup', function () {
    return view('auth.signup');
});
Route::get('/home', [ListController::class, 'displayList']
)->name('home');


Route::post('/login', [LoginController::class, 'login']
)->name('login.post');

Route::post('/signup', [SignupController::class, 'signup']
)->name('signup.post');

Route::post('/list', [ListController::class, 'list']
)->name('list.post');

Route::post('/logout', [LogoutController::class, 'logout']
)->name('logout');