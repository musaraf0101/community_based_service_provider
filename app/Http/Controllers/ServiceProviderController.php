<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function showDashboard(){
        return view('service_provider.dashboard');
    }
}
