<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommonPageController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RoleMiddleware;

//common pages
Route::get('/', [CommonPageController::class, 'showHome']);
Route::get('/about', [CommonPageController::class, 'showAbout']);
Route::get('/contact', [CommonPageController::class, 'showContact']);


//auth route
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin dashboard routes
Route::prefix('/admin')->middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard');

});

// User dashboard routes
Route::prefix('/user')->middleware(['auth', 'role:user'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'showDashboard'])->name('User.dashboard');

});


// service provider dashboard routes
Route::prefix('/service-provider')->middleware(['auth', 'role:service_provider'])->group(function () {
    Route::get('/dashboard', [ServiceProviderController::class, 'showDashboard'])->name('Service-provider.dashboard');

});