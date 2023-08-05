<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CollaboratorController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\CurriculumExperienceController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::post('/users',[UserController::class,'create']);
Route::get('/users/{id}',[UserController::class,'getById']);
Route::get('/users',[UserController::class,'get']);

Route::get('/curriculum/{id}',[CurriculumController::class,'getById']);
Route::get('/curriculum',[CurriculumController::class,'get']);

Route::get('/experience/{id}',[CurriculumExperienceController::class,'getById']);

Route::get('/experience',[CurriculumExperienceController::class,'get']);

Route::get('/curriculumexperience',[CurriculumController::class,'getWithExperiences']);
Route::get('/curriculumidexperience/{id}',[CurriculumController::class,'getByIdWithExperiences']);



Route::get('/movies',[MovieController::class,'get']);
Route::get('/movies/{id}',[MovieController::class,'getById']);

Route::get('/collaborators',[CollaboratorController::class,'get']);
Route::get('/collaborators/{id}',[CollaboratorController::class,'getById']);



Route::post('/login',[AuthController::class,'login']);

Route::middleware('jwt.verify')->group(function(){
    Route::patch('/users/{id}',[UserController::class,'update']);
    
    Route::post('/curriculum',[CurriculumController::class,'create']);
    Route::patch('/curriculum/{id}',[CurriculumController::class,'update']);
    Route::delete('/curriculum/{id}',[CurriculumController::class,'delete']);
    
    Route::post('/curriculum/experience/{cv_id}',[CurriculumExperienceController::class,'create']);
    Route::patch('/experience/{id}',[CurriculumExperienceController::class,'update']);
    Route::delete('/experience/{id}',[CurriculumExperienceController::class,'delete']);
    
    Route::middleware('admin.auth')->group(function(){
        Route::delete('/users/{id}',[UserController::class,'delete']);
        
        Route::post('/movies',[MovieController::class,'create']);
        Route::patch('/movies/{id}',[MovieController::class,'update']);
        Route::delete('/movies/{id}',[MovieController::class,'delete']);

        Route::post('/collaborators/{id}',[CollaboratorController::class,'create']);
        Route::patch('/collaborators/{id}',[CollaboratorController::class,'update']);
        Route::delete('/collaborators/{id}',[CollaboratorController::class,'delete']);

    });
});
