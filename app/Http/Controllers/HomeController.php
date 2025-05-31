<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('common_pages.home_view');
    }
    public function viewServiceProvider(){
        return view('common_pages.service_provider_details_view');
    }
}
