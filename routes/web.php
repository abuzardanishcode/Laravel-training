<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::view('/welcome', 'welcome');

Route::get('about/{name}', function($name){
    return view('about', ["user" => $name]);
});

Route::get('/user', [UserController::class, 'getUser']);

Route::get('/user/{name}', [UserController::class, 'getUserName']);

Route::get("view", [UserController::class, 'getView']);

Route::get("login", [UserController::class, 'login']);