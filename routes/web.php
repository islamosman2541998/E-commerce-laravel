<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('redirect',[AuthController::class,'redirect']);

Route::controller(ProductController::class)->group(function () {
    Route::get('/products','all');
    Route::get('/products/{id}','show');

    Route::get('/products/create','create');
    Route::post('/products','store');

    Route::get('/products/edit/{id}','edit');
    Route::put('/products/{id}','update')->name('update');

    Route::delete('/products/{id}','delete');
});
