<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', [userController::class, 'index'])->name('index');
Route::get('/search', [userController::class, 'search'])->name('search');
Route::post('/result', [userController::class, 'result'])->name('result');