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

Route::middleware('guest')->group(function () {
Route::get('/login', function () {
    return view('login');
})->middleware('auth');

Route::get('/register', function () {
    return view('register');
})->middleware('auth');});

Route::get('constructions',[ConstructionController::class, 'index'])
->middleware(['auth', 'verified']);
Route::get('constructions/create', [ConstructionController::class, 'create'])
->middleware(['auth', 'verified'])->name('constructions.create');
Route::post('constructions', [ConstructionController::class, 'store'])
->middleware(['auth', 'verified']);
Route::get('constructions/{id}/edit', [ConstructionController::class, 'edit'])
->middleware(['auth', 'verified']);
Route::put('constructions/{id}', [ConstructionController::class, 'update'])
->middleware(['auth', 'verified']);
Route::delete('constructions/{id}', [ConstructionController::class, 'destroy'])
->middleware(['auth', 'verified']);
Route::get('constructions/{id}/pdf', [ConstructionController::class, 'generatePDF'])
->middleware(['auth', 'verified'])->name('constructions.pdf');
 
require __DIR__.'/auth.php';
