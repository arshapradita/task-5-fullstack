<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

Auth::routes();

Route::get('/', function () {
    return view('home');
});


Route::middleware('auth')
    ->resource('categories', CategoryController::class)
    ->except([
        'show'
    ]);


Route::middleware('auth')
    ->resource('posts', PostController::class);
