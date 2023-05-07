<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->middleware('auth')->name('logout');

Route::get('/', [PageController::class, 'start'])->name('start');
Route::get('veterinary-help', [PageController::class, 'veterinaryHelp'])->name('veterinary-help');

Route::middleware('auth')->group(function () {
    Route::get('/chat', [PageController::class, 'chat'])->name('chat');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [PostController::class, 'index'])->name('post.index');
    Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
    Route::get('/create-post/{action}', [PostController::class, 'create'])->name('post.create');
    Route::post('create-post', [PostController::class, 'store'])->name('post.store');
    Route::get('/adopt-pet', [PetController::class, 'index'])->name('adopt-pet');
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
