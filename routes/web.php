<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Middleware\SuperAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'IndexFrontend'])->name('home');;

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
        Route::post('/create', [HomeController::class, 'createRequest'])->name('home.create');
        Route::get('/delete/{section_id}', [HomeController::class, 'delete'])->name('homesection.delete');
        Route::get('/edit/{section_id}', [HomeController::class, 'edit'])->name('homesection.edit');
        Route::post('/edit/{section_id}', [HomeController::class, 'editRequest'])->name('homesection.edit.request');
    });
    Route::get('/menu/{location}', [MenuController::class,'Index'])->name('admin.menu');
    Route::post('/menu/{location}', [MenuController::class,'store'])->name('menu.create');
    Route::get('/menu/delete/{id}', [MenuController::class,'delete'])->name('menu.delete');
    Route::get('/settings', [SettingsController::class,'index'])->name('settings');
    Route::post('/settings', [SettingsController::class,'store'])->name('settings.request');
});
require __DIR__.'/auth.php';
