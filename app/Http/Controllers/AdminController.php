<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Compliant;
use App\Models\ServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin_pages.admin_dashboard_view');
    }
    public function admincompliantlist()
    {
        $compliants = Compliant::all();
        return view('admin_pages.compliant_list_view', compact('compliants'));
    }
    public function adminDashboard()
    {
        $totalUsers = User::count();
        $totalBookings = Booking::count();
        $totalComplaints = Compliant::count();
        $totalServiceProviders = ServiceProvider::count();
        $maleProviders = ServiceProvider::where('gender', 'male')->count();
        $femaleProviders = ServiceProvider::where('gender', 'female')->count();
        $otherProviders = ServiceProvider::where('gender', 'other')->count();

        // $userCount = User::where('role','user')->count();
        // $serviceProviderCount = ServiceProvider::where('role','service_provider')->count();



        return view('admin_pages.admin_dashboard_view', compact(
            'totalUsers',
            'totalBookings',
            'totalComplaints',
            'totalServiceProviders',
            'maleProviders',
            'femaleProviders',
            'otherProviders',
            // 'usercount',
            // 'serviceProviderCount',
        ));
    }
}
