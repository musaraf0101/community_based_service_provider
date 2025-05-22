<?php

use Illuminate\Support\Facades\Route;
/* dashboard */

// admin dashboard
Route::get('/admin/dashboard', function () {
    return view('admin_pages.admin_dashboard_view');
});

//service provider dashboard

Route::get('/service-provider/dashboard',function(){
    return view('service_provider_pages.service_provider_dashboard_view');
});


// user dashboard
Route::get('/user/dashboard',function(){
    return view('user_pages.user_dashboard_view');
});