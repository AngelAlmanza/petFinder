<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PetCenterController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->middleware('auth')->name('logout');

Route::get('/', [PageController::class, 'start'])->name('start');

Route::controller(PetCenterController::class)->group(function () {
    Route::get('/create/pet-center', 'create')->name('petCenter.create');
    Route::get('/veterinary-help', 'index')->name('petCenter.index');
    Route::post('/create/pet-center', 'store')->name('petCenter.store');
    Route::get('/pet-center/{id}', 'show')->name('petCenter.show');
})->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/chat', [PageController::class, 'chat'])->name('chat');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [PostController::class, 'index'])->name('post.index');
    Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
    Route::get('/create-post/{action}', [PostController::class, 'create'])->name('post.create');
    Route::post('create-post', [PostController::class, 'store'])->name('post.store');
    Route::get('/edit-post/{post}', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/edit-post/{post}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/delete-post/{post}', [PostController::class, 'destroy'])->name('post.destroy');
    Route::get('/adopt-pet', [PetController::class, 'index'])->name('adopt-pet');
    Route::get('/report/{postId}', [ReportController::class, 'create'])->name('report.create');
    Route::post('/report', [ReportController::class, 'store'])->name('report.store');
    Route::get('/show-report/{report}', [ReportController::class, 'show'])->name('report.show');
    Route::get('/edit-report/{report}', [ReportController::class, 'edit'])->name('report.edit');
    Route::put('/edit-report/{report}/update', [ReportController::class, 'update'])->name('report.update');
    Route::delete('/delete-report/{report}', [ReportController::class, 'destroy'])->name('report.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin/dashboard/general-view', [DashboardController::class, 'generalView'])->name('dashboard.general');
    Route::get('/admin/dashboard/storage', [DashboardController::class, 'storageView'])->name('dashboard.storage');
    Route::get('/admin/dashboard/lost-pets', [DashboardController::class, 'lostPetsView'])->name('dashboard.lostPets');
    Route::get('/admin/dashboard/adopted-pets', [DashboardController::class, 'adoptedPetsView'])->name('dashboard.adoptedPets');
    Route::get('/admin/dashboard/reports', [ReportController::class, 'index'])->name('dashboard.reports');
});

require __DIR__.'/auth.php';
