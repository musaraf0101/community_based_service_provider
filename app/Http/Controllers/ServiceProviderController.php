<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceProviderController extends Controller
{
    public function showDashboard()
    {
        $user = Auth::user();
        $serviceProvider = $user->serviceProvider;

        if (!$serviceProvider) {
            abort(403, 'Not a service provider.');
        }

        $pendingBookings = $serviceProvider->bookings()->where('status', 'pending')->count();
        $completedBookings = $serviceProvider->bookings()->where('status', 'completed')->count();

        return view('service_provider.dashboard', compact('pendingBookings', 'completedBookings'));
    }
    public function showBookings(ServiceProvider $provider)
    {
        $bookings = $provider->bookings()->with('user')->orderBy('booking_date', 'desc')->get();

        return view('service_provider.booking', compact('provider', 'bookings'));
    }
}
