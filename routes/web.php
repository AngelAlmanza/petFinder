<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
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
    Route::get('/adopt-pet', [PageController::class, 'adoptPet'])->name('adopt-pet');
    Route::get('/chat', [PageController::class, 'chat'])->name('chat');
});

Route::controller(PostController::class)->group(function () {
    Route::get('/home', 'index')->name('post.index');
    Route::get('/post/{id}', 'show')->name('post.show');
    Route::get('/create-post/{action}', 'create')->name('post.create');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
