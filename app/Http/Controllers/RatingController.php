<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function create(ServiceProvider $provider)
    {
        return view('user.rating', compact('provider'));
    }
    public function store(Request $request, ServiceProvider $provider)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string|max:500',
        ]);

        Rating::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'service_provider_id' => $provider->id,
            ],
            [
                'rating' => $request->rating,
                'review' => $request->review,
            ]
        );
        return redirect()->back()->with('success', 'Thank you for your rating!');
    }
}
