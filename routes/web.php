<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/rodeo.festival', function () {
    return view('pages.rodeo-festival');
})->name('pages.rodeo-festival');

Route::get('/rodeo.festival.2026', function () {
    return view('pages.rodeo-festival2026');
})->name('pages.rodeo-festival2026');

Route::get('/registration', function () {
    return view('pages.registration');
})->name('pages.registration');

Route::get('/past.winners', function () {
    return view('pages.pastwinners');
})->name('pages.pastwinners');

Route::get('/vroom', function () {
    return view('pages.vroom');
})->name('pages.vroom');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


