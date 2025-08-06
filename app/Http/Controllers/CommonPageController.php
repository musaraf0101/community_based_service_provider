<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonPageController extends Controller
{
    public function showHome(){
        return view('common_pages.home');
    }
    public function showAllProviders(){
        return view('common_pages.view_all_service_provider_profile');
    }
    public function showContact(){
        return view('common_pages.contact');
    }
}
