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
    public function showBookingList()
    {
        return view('user.booking_list');
    }
    public function showBooking()
    {
        return view('user.book_event');
    }
    public function booking(Request $request)
    {
        $request->validate([
            'eventSelect' => 'required|in:music-festival,tech-conference,art-exhibition',
            'userName' => 'required',
            'userEmail' => 'required',
            'bookingDate' => 'required',
        ]);

        return redirect()->route('User.showBookingList');
    }
    public function showEdit($id)
    {
        return view('user.edit_event');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'eventSelect' => 'required',
            'userName' => 'required',
            'userEmail' => 'required',
            'bookingDate' => 'required',
        ]);

        return redirect()->route('User.showEdit',$id);
    }
    public function delete($id)
    {

        return redirect()->route('User.showBookingList');
    }
}
