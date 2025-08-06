<?php

namespace App\Http\Controllers;

use App\Models\ServiceProvider;
use Illuminate\Http\Request;

class CommonPageController extends Controller
{
    public function showHome(){
        return view('common_pages.home');
    }
    public function showAllProviders(){
        $providers = ServiceProvider::with('user')->get();
        return view('common_pages.view_all_service_provider_profile',compact('providers'));
    }
    public function showContact(){
        return view('common_pages.contact');
    }
}
