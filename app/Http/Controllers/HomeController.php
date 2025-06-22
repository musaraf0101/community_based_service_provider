<?php

namespace App\Http\Controllers;

use App\Models\ServiceProvider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $providers = ServiceProvider::paginate(9);
        // $providers = ServiceProvider::all();
        return view('common_pages.home_view',compact('providers'));
    }
}
