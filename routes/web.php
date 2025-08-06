<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CommonPageController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RoleMiddleware;

//common pages
Route::get('/', [CommonPageController::class, 'showHome']);
Route::get('/contact', [CommonPageController::class, 'showContact']);
Route::get('/view-all-providers', [CommonPageController::class, 'showAllProviders'])->name('CommonPage.showAllProviders');


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

    // view all approvel service provider list
    Route::get('/providers/approved', [AdminController::class, 'approvedProviders'])->name('admin.providers.approved');

    //service provider approvel
    Route::get('/providers', [AdminController::class, 'serviceProviders'])->name('admin.providers');
    Route::post('/providers/{id}/approve', [AdminController::class, 'approve'])->name('admin.providers.approve');
    Route::delete('/providers/{id}/reject', [AdminController::class, 'reject'])->name('admin.providers.reject');

    //service provider preview
    Route::get('/providers/{id}', [AdminController::class, 'show'])->name('admin.providers.show');
    Route::delete('/providers/{id}', [AdminController::class, 'destroyProvider'])->name('admin.providers.destroy');

    // view all users
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');

    // delete the user
    Route::delete('/users/{id}', [AdminController::class, 'destroyUser'])->name('admin.users.destroy');
});

// User dashboard routes
Route::prefix('/user')->middleware(['auth', 'role:user'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'showDashboard'])->name('User.dashboard');
    Route::delete('/bookings/{booking}', [BookingController::class, 'destroy'])->name('bookings.destroy');
});


// service provider dashboard routes
Route::prefix('/service-provider')->middleware(['auth', 'role:service_provider'])->group(function () {
    Route::get('/dashboard', [ServiceProviderController::class, 'showDashboard'])->name('Service-provider.dashboard');
    Route::get('/{provider}/bookings', [ServiceProviderController::class, 'showBookings'])->name('service_provider.bookings');
    Route::delete('/bookings/{booking}', [BookingController::class, 'destroyByProvider'])->name('service_provider.bookings.destroy');
});

Route::middleware(['auth'])->prefix('providers')->group(function () {
    Route::get('{provider}/book', [BookingController::class, 'book'])->name('providers.book');
    Route::post('{provider}/book', [BookingController::class, 'store'])->name('providers.book.store');
    Route::get('{provider}/rate', [RatingController::class, 'create'])->name('ratings.create');
    Route::post('{provider}/rate', [RatingController::class, 'store'])->name('ratings.store');
});
