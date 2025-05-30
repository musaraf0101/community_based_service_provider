<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminServiceProviderController;
use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* ----------------------------------------------------------dashboard---------------------------------------------------------------------- */


// admin dashboard
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('Admin.index');
Route::get('/admin/dashboard/compliant-list', [AdminController::class, 'admincompliantlist'])->name('Admin.admincompliantlist');

// admin-user operation
Route::get('/admin/dashboard/user-create', [AdminUserController::class, 'index'])->name('AdminUser.index');
Route::post('/admin/dashboard/user-store', [AdminUserController::class, 'store'])->name('AdminUser.store');
Route::get('/admin/dashboard/user-edit/{$id}', [AdminUserController::class, 'edit'])->name('AdminUser.edit');
Route::put('/admin/dashboard/{$id}', [AdminUserController::class, 'update'])->name('AdminUser.update');
Route::delete('/admin/dashboard/{id}', [AdminUserController::class, 'delete'])->name('AdminUser.delete');
Route::get('/admin/dashboard/user-list', [AdminUserController::class, 'userlist'])->name('AdminUser.userlist');

//admin-service provider operation
Route::get('/admin/dashboard/service-provider-create', [AdminServiceProviderController::class, 'create'])->name('AdminServiceProvider.create');
Route::post('/admin/dashboard/service-provider-store', [AdminServiceProviderController::class, 'store'])->name('AdminServiceProvider.store');
Route::get('/admin/dashboard/service-provider/{id}', [AdminServiceProviderController::class, 'edit'])->name('AdminServiceProvider.edit');
Route::put('/admin/dashboard/service-provider/{id}/update', [AdminServiceProviderController::class, 'update'])->name('AdminServiceProvider.update');
Route::delete('/admin/dashboard/{id}', [AdminServiceProviderController::class, 'delete'])->name('AdminServiceProvider.delete');
Route::get('/admin/dashboard/service-provider-list', [AdminServiceProviderController::class, 'serviceproviderlist'])->name('AdminServiceProvider.serviceproviderlist');

/* -------------------------------------------------------------------------------------------------------------------------------------- */