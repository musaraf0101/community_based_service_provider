<?php

namespace App\Http\Controllers;

use App\Models\ServiceProvider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $providers = ServiceProvider::all();
        return view('common_pages.home_view',compact('providers'));
    }
    public function viewServiceProvider(){
        return view('common_pages.service_provider_details_view');
    }
}
