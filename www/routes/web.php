<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgendaController;


Route::get('/user', [UserController::class, 'index']);
Route::get('/create', [UserController::class, 'create']);
Route::get('/show/{id}', [UserController::class, 'show']);
Route::get('/agenda', [AgendaController::class, 'create']);
Route::get('/login', [UserController::class, 'login']);
