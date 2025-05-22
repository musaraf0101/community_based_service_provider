<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
/* --------------------------------------dashboard------------------------------------- */

// admin dashboard
Route::get('/admin/dashboard',[AdminController::class,'index'])->name('Admin.index');
Route::get('/admin/dashboard/user-create',[AdminController::class,'usercreate'])->name('Admin.usercreate');
Route::get('/admin/dashboard/service-provider-create',[AdminController::class,'serviceproviderCreate'])->name('Admin.serviceproviderCreate');
Route::get('/admin/dashboard/user-list',[AdminController::class,'userlist'])->name('Admin.userlist');
Route::get('/admin/dashboard/service-provider-list',[AdminController::class,'serviceproviderlist'])->name('Admin.serviceproviderlist');
Route::get('/admin/dashboard/compliant-list',[AdminController::class,'admincompliantlist'])->name('Admin.admincompliantlist');

//service provider dashboard
Route::get('/service-provider/dashboard',[ServiceProviderController::class,'index'])->name('ServiceProvider.index');
Route::get('/service-provider/dashboard/update',[ServiceProviderController::class,'serviceproviderUpdate'])->name('ServiceProvider.serviceproviderUpdate');
Route::get('/service-provider/dashboard/compliant-list',[ServiceProviderController::class,'servideproviderCompliantlist'])->name('ServiceProvider.servideproviderCompliantlist');
Route::get('/service-provider/dashboard/book-list',[ServiceProviderController::class,'serviceproviderBooklist'])->name('ServiceProvider.serviceproviderBooklist');

// user dashboard
Route::get('/user/dashboard',[UserController::class,'index'])->name('User.index');
Route::get('/user/dashboard/compliant-create',[UserController::class,'compliantcreate'])->name('User.compliantcreate');
Route::get('/user/dashboard/update',[UserController::class,'userupdate'])->name('User.userupdate');
Route::get('/user/dashboard/service-provider-list',[UserController::class,'userserviceproviderlist'])->name('User.userserviceproviderlist');
Route::get('/user/dashboard/book',[UserController::class,'userbook'])->name('User.userbook');
/* ------------------------------------------------------------------------------------- */