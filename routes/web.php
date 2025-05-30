<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* ----------------------------------------------------------dashboard---------------------------------------------------------------------- */


// admin dashboard
Route::get('/admin/dashboard',[AdminController::class,'index'])->name('Admin.index');
Route::get('/admin/dashboard/user-create',[AdminUserController::class,'index'])->name('AdminUser.index');
Route::post('/admin/dashboard/user-store',[AdminUserController::class,'store'])->name('AdminUser.store');
Route::get('/admin/dashboard/user-edit/{$id}',[AdminUserController::class,'edit'])->name('AdminUser.edit');
Route::put('/admin/dashboard/{$id}',[AdminUserController::class,'update'])->name('AdminUser.update');
Route::delete('/admin/dashboard/{id}',[AdminUserController::class,'delete'])->name('AdminUser.delete');