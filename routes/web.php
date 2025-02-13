<?php

use App\Http\Controllers\ConstructionController;
use App\Http\Controllers\ProfileController;
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
});

Route::get('constructions',[ConstructionController::class, 'index']);
Route::get('constructions/create', [ConstructionController::class, 'create'])->name('constructions.create');
Route::post('constructions', [ConstructionController::class, 'store']);
Route::get('constructions/{id}/edit', [ConstructionController::class, 'edit']);
Route::put('constructions/{id}', [ConstructionController::class, 'update']);
Route::delete('constructions/{id}', [ConstructionController::class, 'destroy']);

require __DIR__.'/auth.php';
