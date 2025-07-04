<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminServiceProviderController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Middleware\RoleMiddleware;
use App\Models\Booking;
use App\Models\Compliant;
use App\Models\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('Home.index');
Route::get('/about', [AboutController::class, 'index'])->name('About.index');
Route::get('/contact-us', [ContactController::class, 'index'])->name('Contact.index');
Route::post('/contact-us/send', [ContactController::class, 'store'])->name('Contact.store');


/*------------- Auth Routes ---------------*/
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login-store', [LoginController::class, 'login'])->name('Login.login');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('Register.showRegisterForm');
Route::post('/register-store', [RegisterController::class, 'register'])->name('Register.register');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
/*--------------------- Auth Routes --------------------*/

/* ----------------------------------------------------------dashboard---------------------------------------------------------------------- */

// Admin dashboard routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {

        $totalUsers = User::count();
        $totalBookings = Booking::count();
        $totalComplaints = Compliant::count();
        $totalServiceProviders = ServiceProvider::count();
        $maleProviders = ServiceProvider::where('gender', 'male')->count();
        $femaleProviders = ServiceProvider::where('gender', 'female')->count();
        $otherProviders = ServiceProvider::where('gender', 'other')->count();

        return view('admin_pages.admin_dashboard_view', compact(
            'totalUsers',
            'totalBookings',
            'totalComplaints',
            'totalServiceProviders',
            'maleProviders',
            'femaleProviders',
            'otherProviders'
        ));
    })->name('Admin.index');

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
    Route::get('/admin/dashboard/service-provider-edit/{id}', [AdminServiceProviderController::class, 'edit'])->name('AdminServiceProvider.edit');
    Route::put('/admin/dashboard/service-provider-update/{id}', [AdminServiceProviderController::class, 'update'])->name('AdminServiceProvider.update'); //error
    Route::delete('/admin/dashboard/service-provider-delete/{id}', [AdminServiceProviderController::class, 'delete'])->name('AdminServiceProvider.delete');
    Route::get('/admin/dashboard/service-provider-list', [AdminServiceProviderController::class, 'serviceproviderlist'])->name('AdminServiceProvider.serviceproviderlist');
});

// User dashboard routes
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', function () {
        return view('user_pages.user_dashboard_view');
    })->name('User.index');

    Route::get('/user/dashboard/compliant-create', [UserController::class, 'compliantcreate'])->name('User.compliantcreate');
    Route::post('/user/dashboard/compliant-store', [UserController::class, 'compliantstore'])->name('User.compliantstore');
    Route::get('/user/dashboard/edit/{id}', [UserController::class, 'userEdit'])->name('User.userEdit');
    Route::put('/user/dashboard/update/{id}', [UserController::class, 'userupdate'])->name('User.userupdate');
    Route::get('/user/dashboard/service-provider-list', [UserController::class, 'serviceproviderlist'])->name('User.serviceproviderlist');
    Route::get('/user/dashboard/book', [UserController::class, 'userbook'])->name('User.userbook');
    Route::post('/user/dashboard/store', [UserController::class, 'userBookStore'])->name("User.userBookStore");
    // payment
    // Route::get('/user/dashboard/payment-list', [PaymentController::class, 'payment_list'])->name('Payment.payment_list');
    // Route::get('/user/dashboard/payment-add', [PaymentController::class, 'index'])->name('Payment.index');
    // Route::post('/user/dashboard/payment-store', [PaymentController::class, 'store'])->name('Payment.store');
    // Route::get('/user/dashboard/payment-edit/{id}', [PaymentController::class, 'edit'])->name('Payment.edit');
    // Route::put('/user/dashboard/payment-update/{id}', [PaymentController::class, 'update'])->name('Payment.update');
    // Route::delete('/user/dashboard/payment-delete/{id}', [PaymentController::class, 'delete'])->name('Payment.delete');
});

// Service Provider dashboard routes
Route::middleware(['auth', 'role:service_provider'])->group(function () {
    Route::get('/service-provider/dashboard', function () {
        return view('service_provider_pages.service_provider_dashboard_view');
    })->name('ServiceProvider.index');

    Route::get('/service-provider/dashboard/edit/{id}', [ServiceProviderController::class, 'edit'])->name('ServiceProvider.edit');
    Route::put('/service-provider/dashboard/update/{id}', [ServiceProviderController::class, 'update'])->name('ServiceProvider.update');
    Route::get('/service-provider/dashboard/compliant-list', [ServiceProviderController::class, 'compliantList'])->name('ServiceProvider.compliantList');
    Route::get('/service-provider/dashboard/book-list', [ServiceProviderController::class, 'bookList'])->name('ServiceProvider.bookList');
    Route::get('/service-provider/dashboard/compliant-edit/{id}',[ServiceProviderController::class,'complaintEdit'])->name('ServiceProvider.complaintEdit');
    Route::put('/service-provider/dashboard/compliant-update/{id}',[ServiceProviderController::class,'complaintUpdate'])->name('ServiceProvider.complaintUpdate');
    Route::delete('/service-provider/dashboard/compliant-delete/{id}',[ServiceProviderController::class,'complaintDelete'])->name('ServiceProvider.complaintDelete');
});


/* -------------------------------------------------------------------------------------------------------------------------------------- */