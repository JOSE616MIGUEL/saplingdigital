<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NavegationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

Route::get('/sapling', function () {
    return redirect('/sapling/public');
});

Route::get('/', function () {
    return view('welcome');
})->name('Welcome');

Route::get('/about', [NavegationController::class, 'indexabout'])->name('About.index');
Route::get('/services', [NavegationController::class, 'indexservices'])->name('Services.index');
Route::get('/contact', [NavegationController::class, 'indexcontact'])->name('Contact.index');



Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
