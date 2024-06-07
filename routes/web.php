<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::get('new', [\App\Http\Controllers\EmployeeController::class, 'index1'])->name('new.index1');

    Route::get('pages', [\App\Http\Controllers\EmployeeController::class, 'index'])->name('pages.index');
    Route::resource("employee", EmployeeController::class);

    // Route::get('/new/index1', [EmployeeController::class, 'index1'])->name('new.index1');

});