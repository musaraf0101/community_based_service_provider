<?php

namespace App\Http\Controllers;

use App\Models\ServiceProvider;
use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function showDashboard()
    {
        return view('service_provider.dashboard');
    }
    public function showBookings(ServiceProvider $provider)
    {
        $bookings = $provider->bookings()->with('user')->orderBy('booking_date', 'desc')->get();

        return view('service_provider.booking', compact('provider', 'bookings'));
    }
}
