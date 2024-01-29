<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::resource('users', UserController::class);
Route::resource('stores', StoreController::class);