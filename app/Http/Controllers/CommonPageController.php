<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonPageController extends Controller
{
    public function showHome(){
        return view('common_pages.home');
    }
    public function showAbout(){
        return view('common_pages.about');
    }
    public function showContact(){
        return view('common_pages.contact');
    }
}
