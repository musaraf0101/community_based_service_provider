<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\ServiceProvider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function book(ServiceProvider $provider)
    {
        $provider->load('user');
        return view('user.booking', compact('provider'));
    }
    public function store(Request $request, ServiceProvider $provider)
    {
        $request->validate([
            'booking_date' => ['required', 'date', 'after_or_equal:today'],
            'booking_time' => ['required', function ($attribute, $value, $fail) use ($request) {
                $bookingDate = $request->booking_date;
                $bookingDateTime = Carbon::parse("$bookingDate $value");

                if ($bookingDateTime->isPast()) {
                    $fail('The booking time cannot be in the past.');
                }
            },],
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

    public function destroy(Booking $booking)
    {
        if ($booking->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $booking->delete();

        return redirect()->route('User.dashboard')->with('success', 'Booking deleted successfully.');
    }

    public function destroyByProvider($id)
    {
        $booking = Booking::findOrFail($id);

        if ($booking->service_provider_id != Auth::user()->serviceProvider->id) {
            return redirect()->back()->with('error', 'You are not authorized to delete this booking.');
        }

        $booking->delete();

        return redirect()->back()->with('success', 'Booking deleted successfully.');
    }
    public function updateStatus(Request $request, Booking $booking)
    {
        $serviceProvider = Auth::user()->serviceProvider;

        if (!$serviceProvider || $booking->service_provider_id != $serviceProvider->id) {
            return redirect()->back()->with('error', 'You are not authorized to update this booking.');
        }

        $request->validate([
            'status' => 'required|in:pending,completed',
        ]);

        $booking->status = $request->status;
        $booking->save();

        return redirect()->back()->with('success', 'Booking status updated successfully.');
    }
}
