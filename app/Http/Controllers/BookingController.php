<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function book(ServiceProvider $provider)
    {
        $provider->load('user');
        return view('bookings.create', compact('provider'));
    }
    public function store(Request $request, ServiceProvider $provider)
    {
        $request->validate([
            'booking_date' => 'required|date',
            'booking_time' => 'required',
        ]);

        $userId = Auth::id();
        
        if (!$userId) {
            return redirect()->route('login');
        }
        Booking::create([
            'user_id' => $userId,
            'service_provider_id' => $provider->id,
            'booking_date' => $request->booking_date,
            'booking_time' => $request->booking_time,
            'status' => 'pending',
        ]);

        return redirect()->route('User.dashboard')->with('success', 'Booking created successfully!');
    }
}
