<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

Route::get('/Aboutus', function () {
    return view('About Us');
});

Route::get('/Events', function () {
    return view('Events');
});

Route::get('/Games', function () {
    return view('Games');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/Signup', function () {
    return view('Signup');
});

Route::get('/Studio', function () {
    return view('Studio');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/EldenRing', function () {
    return view('EldenRing');
});

Route::get('/Join', function () {
    return view('JoinForm');
});

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('admin',[RegisterController::class, 'view']);
Route::get('user/delete/{id}', [RegisterController::class, 'delete']);
Route::get('user/edit/{id}', [RegisterController::class, 'edit']);


Route::get('Signup', [RegisterController::class, 'create'])->middleware('guest');
Route::post('Signup', [RegisterController::class, 'store'])->middleware('guest');

Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
