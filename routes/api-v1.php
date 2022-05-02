<?php

use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\ResultadosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\LoginController;


Route::post('login', [LoginController::class, 'store']);
Route::post('register',[RegisterController::class,'store'])->name('api.vi.register');
Route::post('resultados', [ResultadosController::class, 'index'])->name('api.v1.resultados.index');
