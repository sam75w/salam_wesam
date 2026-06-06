<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

// Task routes using TaskController + Eloquent Model
Route::get('/tasks', [TaskController::class, 'index']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit']);
Route::post('/tasks/{id}/update', [TaskController::class, 'update']);
Route::post('/tasks/{id}/delete', [TaskController::class, 'destroy']);

// User routes using UserController
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}/edit', [UserController::class, 'edit']);
Route::post('/users/{id}/update', [UserController::class, 'update']);
Route::post('/users/{id}/delete', [UserController::class, 'destroy']);