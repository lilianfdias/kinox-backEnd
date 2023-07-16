<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/users',[UserController::class,'create']);
Route::get('/users',[UserController::class,'get']);
Route::get('/users/{id}',[UserController::class,'getById']);
Route::post('/users/{id}',[UserController::class,'update']);
Route::delete('/users/{id}',[UserController::class,'delete']);

Route::post('/login',[AuthController::class,'login']);

