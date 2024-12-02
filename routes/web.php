<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\TicketController;

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

Route::get('/contact', function () {
    return view('main.contact');
});

Route::get('/auth', [AuthController::class, 'index']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/logout', [AuthController::class, 'logout']);

Route::get('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/create', [AuthController::class, 'create']);

Route::get('/seats', [SeatController::class, 'index']);

Route::get('/movie/create', [MovieController::class, 'create'])->name('movie.create');
Route::post('/movie/store', [MovieController::class, 'store'])->name('movie.store');

Route::get('/ticket', [TicketController::class, 'index'])->name('user.ticket.index');

// buy ticket
Route::get('/movie/{id}',[MovieController::class, 'findMovieByID'])->name('user.movie.detail');
Route::get('/movie/{id}/showtimes', [MovieController::class, 'findShowtimeByID'])->name('user.movie.showtime');

Route::get('/studio/{id}/seats', [StudioController::class, 'findSdByStID'])->name('user.studio.seat');
Route::post('/ticket-store', [TicketController::class, 'store'])->name('user.ticket.store');

Route::prefix('/admin')->group(function(){
    Route::get('', function(){
        return view('admin/home');
    });

    // Route::resource('/cinema', CinemaController::class);
    Route::get('/cinema', [CinemaController::class, 'index'])->name('cinema.index');
    Route::get('/cinema/{id}', [CinemaController::class, 'show'])->name('cinema.detail');
    Route::get('/cinema-create', [CinemaController::class, 'create'])->name('cinema.create');
    Route::post('/cinema-store', [CinemaController::class, 'store'])->name('cinema.store');
    Route::get('/cinema-edit/{id}', [CinemaController::class, 'edit'])->name('cinema.edit');
    Route::put('/cinema-update/{id}', [CinemaController::class, 'update'])->name('cinema.update');
    Route::delete('/cinema-destroy/{id}', [CinemaController::class, 'destroy'])->name('cinema.delete');

    Route::get('/studio', [StudioController::class, 'index'])->name('studio.index');
    Route::get('/studio/{id}', [StudioController::class, 'show'])->name('studio.detail');
    Route::get('/studio-create', [StudioController::class, 'create'])->name('studio.create');
    Route::post('/studio-store', [StudioController::class, 'store'])->name('studio.store');
    Route::get('/studio-edit/{id}', [StudioController::class, 'edit'])->name('studio.edit');
    Route::put('/studio-update/{id}', [StudioController::class, 'update'])->name('studio.update');
    Route::delete('/studio-destroy/{id}', [StudioController::class, 'destroy'])->name('studio.delete');
});
