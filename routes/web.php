<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\ImageIndex;
use App\Livewire\Tasks\TasksIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/tasks', TasksIndex::class )->name('tasks.index');
    Route::get('/images', ImageIndex::class )->name('images.index');

});

require __DIR__.'/auth.php';
