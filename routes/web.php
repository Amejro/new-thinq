<?php

use App\Livewire\Register;
use App\Livewire\Auth\Signup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/partnership', function () {
    return view('partnership');
});

Route::get('/logistics', function () {
    return view('logistics');
});

Route::get('/ecommerce', function () {
    return view('ecommerce');
});

Route::get('/company', function () {
    return view('company');
});
Route::get('/procurement', function () {
    return view('procurement');
});

Route::get('/supplychain', function () {
    return view('supplychain');
});

Route::get('/company', function () {
    return view('company');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/register', [RegisterUserController::class,'create'])->name('register');

Route::post('/register', [RegisterUserController::class,'store']);


// Route::get('/signup', Signup::class)->name('signup');



