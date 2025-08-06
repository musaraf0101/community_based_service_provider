<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showDashboard()
    {
        return view('user.dashboard');
    }
    public function showbooking()
    {
        return view('user.booking');
    }
}
