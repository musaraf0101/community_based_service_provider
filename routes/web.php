<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminServiceProviderController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('Home.index');
Route::get('/contact-us',[ContactController::class,'index'])->name('Contact.index');
Route::post('/contact-us/send',[ContactController::class,'store'])->name('Contact.store');
Route::get('/view/service-provider-details',[HomeController::class,'viewServiceProvider'])->name('Home.viewServiceProvider');

/* ----------------------------------------------------------dashboard---------------------------------------------------------------------- */

// admin dashboard
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('Admin.index');
Route::get('/admin/dashboard/compliant-list', [AdminController::class, 'admincompliantlist'])->name('Admin.admincompliantlist');

// admin-user operation
Route::get('/admin/dashboard/user-create', [AdminUserController::class, 'index'])->name('AdminUser.index'); //ok
Route::post('/admin/dashboard/user-store', [AdminUserController::class, 'store'])->name('AdminUser.store'); //ok
Route::get('/admin/dashboard/user-edit/{id}', [AdminUserController::class, 'edit'])->name('AdminUser.edit'); //ok
Route::put('/admin/dashboard/user-update/{id}', [AdminUserController::class, 'update'])->name('AdminUser.update'); //error
Route::delete('/admin/dashboard/user-delete/{id}', [AdminUserController::class, 'delete'])->name('AdminUser.delete'); //ok
Route::get('/admin/dashboard/user-list', [AdminUserController::class, 'userlist'])->name('AdminUser.userlist'); //ok

//admin-service provider operation
Route::get('/admin/dashboard/service-provider-create', [AdminServiceProviderController::class, 'create'])->name('AdminServiceProvider.create'); //ok
Route::post('/admin/dashboard/service-provider-store', [AdminServiceProviderController::class, 'store'])->name('AdminServiceProvider.store'); //ok
Route::get('/admin/dashboard/service-provider-edit/{id}', [AdminServiceProviderController::class, 'edit'])->name('AdminServiceProvider.edit'); //ok
Route::put('/admin/dashboard/service-provider-update/{id}', [AdminServiceProviderController::class, 'update'])->name('AdminServiceProvider.update'); //error
Route::delete('/admin/dashboard/service-provider-delete/{id}', [AdminServiceProviderController::class, 'delete'])->name('AdminServiceProvider.delete');
Route::get('/admin/dashboard/service-provider-list', [AdminServiceProviderController::class, 'serviceproviderlist'])->name('AdminServiceProvider.serviceproviderlist');


//service provider dashboard

Route::get('/service-provider/dashboard', [ServiceProviderController::class, 'index'])->name('ServiceProvider.index');
Route::get('/service-provider/dashboard/edit/{id}', [ServiceProviderController::class, 'edit'])->name('ServiceProvider.edit');
Route::put('/service-provider/dashboard/update/{id}', [ServiceProviderController::class, 'update'])->name('ServiceProvider.update');
Route::get('/service-provider/dashboard/compliant-list', [ServiceProviderController::class, 'compliantList'])->name('ServiceProvider.compliantList');
Route::get('/service-provider/dashboard/book-list', [ServiceProviderController::class, 'bookList'])->name('ServiceProvider.bookList');


//User dashboard
Route::get('/user/dashboard', [UserController::class, 'index'])->name('User.index');
Route::get('/user/dashboard/compliant-create', [UserController::class, 'compliantcreate'])->name('User.compliantcreate');
Route::post('/user/dashboard/compliant-store', [UserController::class, 'compliantstore'])->name('User.compliantstore');
Route::get('/user/dashboard/edit/{id}', [UserController::class, 'userEdit'])->name('User.userEdit');
Route::put('/user/dashboard/update/{id}', [UserController::class, 'userupdate'])->name('User.userupdate');
Route::get('/user/dashboard/service-provider-list', [UserController::class, 'serviceproviderlist'])->name('User.serviceproviderlist');
Route::get('/user/dashboard/book', [UserController::class, 'userbook'])->name('User.userbook');


/* -------------------------------------------------------------------------------------------------------------------------------------- */