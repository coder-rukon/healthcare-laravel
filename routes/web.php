<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\SuperAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'Index'])->name('home');;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth',SuperAdmin::class], 'prefix' => 'admin'], function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::group([
        'prefix' => 'home',
    ], function () {
        Route::get('/home', [HomeController::class, 'Index'])->name('admin.home');
        Route::get('/create', [HomeController::class, 'create'])->name('home.create');
    });
    Route::get('/menu', [MenuController::class,'Index'])->name('admin.menu');
    Route::post('/menu', [MenuController::class,'store'])->name('menu.create');
    Route::get('/menu/delete/{id}', [MenuController::class,'delete'])->name('menu.delete');
});
require __DIR__.'/auth.php';
