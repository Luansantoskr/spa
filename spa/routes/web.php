<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\CoordenadorController;
use App\Http\Controllers\EstagiarioController;


Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/create', [UserController::class, 'create'])->name('user.create');
Route::get('/show/{id}', [UserController::class, 'show']);
Route::get('/agenda', [AgendaController::class, 'create'])->name('agenda.create');
Route::get('/login', [UserController::class, 'login'])->name('user.login');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/create/coordenador', [CoordenadorController::class, 'create'])->name('coordenador.create');
Route::post('/coordenador', [CoordenadorController::class, 'store'])->name('coordenador.store');
Route::get('/create/estagiario', [EstagiarioController::class, 'create'])->name('estagiario.create');
Route::post('/estagiario', [EstagiarioController::class, 'store'])->name('estagiario.store');
Route::get('/create/agenda', [AgendaController::class, 'create'])->name('agenda.create');
Route::post('/agenda', [AgendaController::class, 'store'])->name('agenda.store');