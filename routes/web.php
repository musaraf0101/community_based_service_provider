<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/dashboard',[AdminController::class,'index'])->name('Admin.index');
Route::get('/admin/dashboard/user-create',[AdminUserController::class,'index'])->name('AdminUser.index');
