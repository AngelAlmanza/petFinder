<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->middleware('auth')->name('logout');

Route::get('/start', [PageController::class, 'start'])->name('start');

Route::middleware('auth')->group(function () {
    Route::get('/pet-found', [PageController::class, 'petFound'])->name('pet-found');
    Route::get('/home', [PageController::class, 'home'])->name('home');
    Route::get('/lost-pet', [PageController::class, 'lostPet'])->name('lost-pet');
    Route::get('/adopt-pet', [PageController::class, 'adoptPet'])->name('adopt-pet');
    Route::get('/give-up-for-adoption', [PageController::class, 'givePet'])->name('give-pet');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
