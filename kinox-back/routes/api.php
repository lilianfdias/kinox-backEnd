<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/users',[UserController::class,'create']);
Route::get('/users',[UserController::class,'get']);
Route::get('/users/{id}',[UserController::class,'getById']);


Route::post('/login',[AuthController::class,'login']);

