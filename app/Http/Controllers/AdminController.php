<?php

namespace App\Http\Controllers;

use App\Models\ServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
  public function showDashboard()
  {

    return view('admin.dashboard');
  }

  //service provider approvel
  public function serviceProviders()
  {
    $providers = ServiceProvider::where('status', 'pending')->get();
    return view('admin.service_providers', compact('providers'));
  }
  public function approve($id)
  {
    $provider = ServiceProvider::findOrFail($id);
    $provider->update(['status' => 'approved']);

    return back()->with('success', 'Service Provider Approved.');
  }

  public function reject($id)
  {
    $provider = ServiceProvider::findOrFail($id);
    $provider->user->delete();
    return back()->with('error', 'Service Provider Rejected and Profile Deleted.');
  }
  //view service provider preview
  public function show($id)
  {
    $provider = ServiceProvider::with('user')->findOrFail($id);
    return view('admin.service_provider_preview', compact('provider'));
  }
  //view all approvel service provider
  public function approvedProviders()
  {
    $providers = ServiceProvider::with('user')
      ->where('status', 'approved')
      ->orderBy('created_at', 'desc')
      ->get();

    return view('admin.approved_providers', compact('providers'));
  }

  public function users()
  {
    $currentUserId = Auth::id();

    $users = User::where('role', 'user')
      ->where('id', '!=', $currentUserId)
      ->orderBy('created_at', 'desc')
      ->get();

    return view('admin.view_users', compact('users'));
  }


  public function destroyUser($id)
  {
    $user = User::findOrFail($id);

    if ($user->role === 'admin') {
      return redirect()->route('admin.users')->with('error', 'Cannot delete admin users.');
    }

    $user->delete();

    return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
  }
}
