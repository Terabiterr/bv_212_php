<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, "Read"])
->name('task.read');//->middleware(['auth', 'verified']);
//create
Route::get('/create', [HomeController::class, 'create'])
->name('task.create')->middleware(['auth', 'verified']);
Route::post('/create', [HomeController::class, 'assistant_create'])
->name('home.assistant_create')->middleware(['auth', 'verified']);
//update
Route::get('/update', [HomeController::class, 'update'])
->name('task.update')->middleware(['auth', 'verified']);
Route::post('/update', [HomeController::class, 'assistant_update'])
->name('home.assistant_update')->middleware(['auth', 'verified']);
//delete


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
