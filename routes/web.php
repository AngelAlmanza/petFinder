<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
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
Route::get('veterinary-help', [PageController::class, 'veterinaryHelp'])->name('veterinary-help');

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
    Route::get('/admin/dashboard/pets-founded', [DashboardController::class, 'petsFoundedView'])->name('dashboard.petsFounded');
    Route::get('/admin/dashboard/adopted-pets', [DashboardController::class, 'adoptedPetsView'])->name('dashboard.adoptedPets');
    Route::get('/admin/dashboard/reports', [DashboardController::class, 'reportsView'])->name('dashboard.reports');
});

require __DIR__.'/auth.php';
