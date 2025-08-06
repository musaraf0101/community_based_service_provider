<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|confirmed|min:6',
            'role' => 'required|in:admin,user,service_provider',
            'business_name' => 'required_if:role,service_provider',
            'phone' => 'required_if:role,service_provider',
            'address' => 'required_if:role,service_provider',

        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        if ($request->role === 'service_provider') {
            ServiceProvider::create([
                'user_id' => $user->id,
                'business_name' => $request->business_name,
                'phone' => $request->phone,
                'address' => $request->address,
                'status' => 'pending',
            ]);

            return redirect()->route('login')->with('success', 'Your profile is pending admin approval.');
        }

        Auth::login($user);

        return match ($user->role) {
            'admin' => redirect()->route('admin.dashboard'),
            default => redirect()->route('User.dashboard'),
        };
    }
}
