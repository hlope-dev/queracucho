<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TramiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tramites/index', [TramiteController::class,'index'])->middleware(['auth', 'verified'])->name('tramites.index');
Route::get('/tramites/create', [TramiteController::class,'create'])->middleware(['auth', 'verified'])->name('tramites.create');







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
