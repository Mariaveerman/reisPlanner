<?php

use App\Http\Controllers\AddRiceController;
use App\Http\Controllers\ControllerRice;
use App\Http\Controllers\deleteRiceController;
use App\Http\Controllers\editRiceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/login', [LoginController::class, 'login']);

// Route::post('/test', [LoginController::class, 'authenticate']);


Route::middleware(['guest'])->group(function () {
    Route::get('/', [ControllerRice::class, 'viewRice']);
});

Route::get('/dashboard', [ControllerRice::class, 'viewRice'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/addRise', [AddRiceController::class, 'add'])->middleware(['auth', 'verified'])->name('addRise');
Route::post('/newRise', [AddRiceController::class, 'new'])->middleware(['auth', 'verified'])->name('newRise');
Route::delete('/delete', [deleteRiceController::class, 'test'])
    ->middleware(['auth', 'verified'])
    ->name('delete');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/editRise', function() {
    return view('editRise');
});
Route::post('/edit', [editRiceController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit');

require __DIR__.'/auth.php';
