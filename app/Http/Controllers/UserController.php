<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showDashboard()
    {   
        $bookings = Booking::with('serviceProvider.user')
            ->where('user_id', Auth::id())
            ->orderBy('booking_date', 'desc')
            ->get();

        return view('user.dashboard',compact('bookings'));
    }
}
