<?php

use App\Http\Controllers\AdminController;
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
Route::get('/service-provider/dashboard',function(){
    return view('service_provider_pages.service_provider_dashboard_view');
});
Route::get('/service-provider/dashboard/update',function(){
    return view('service_provider_pages.service_provider_update_view');
});
Route::get('/service-provider/dashboard/compliant-list',function(){
    return view('service_provider_pages.compliant_list_view');
});
Route::get('/service-provider/dashboard/book-list',function(){
    return view('service_provider_pages.book_list_view');
});

// user dashboard
Route::get('/user/dashboard',function(){
    return view('user_pages.user_dashboard_view');
});
Route::get('/user/dashboard/compliant-create',function(){
    return view('user_pages.create_compliant_view');
});
Route::get('/user/dashboard/update',function(){
    return view('user_pages.update_user_view');
});
Route::get('/user/dashboard/service-provider-list',function(){
    return view('user_pages.service_provider_list_view');
});
Route::get('/user/dashboard/book',function(){
    return view('user_pages.service_provider_book_view');
});
/* ------------------------------------------------------------------------------------- */