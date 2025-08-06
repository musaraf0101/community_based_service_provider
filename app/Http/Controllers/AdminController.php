<?php

namespace App\Http\Controllers;

use App\Models\ServiceProvider;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function showDashboard()
  {

    return view('admin.dashboard');
  }
  public function showBooking() {}
  public function deleteBooking($id) {}




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
}
