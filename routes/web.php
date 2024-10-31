<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SeatController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('main/home');
// });

Route::get('/', [MovieController::class, 'index']);

Route::get('/profile', function () {
    return view('main.profile');
});

Route::get('/auth', [AuthController::class, 'index']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/logout', [AuthController::class, 'logout']);

Route::get('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/create', [AuthController::class, 'create']);

Route::get('/seats', [SeatController::class, 'index']);

Route::get('/movie/create', [MovieController::class, 'create'])->name('movie.create');
Route::post('/movie/store', [MovieController::class, 'store'])->name('movie.store');
