<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user_pages.user_dashboard_view');
    }
    public function compliantcreate(){
        return view('user_pages.create_compliant_view');
    }
    public function userupdate(){
        return view('user_pages.update_user_view');
    }
    public function userserviceproviderlist(){
        return view('user_pages.service_provider_list_view');
    }
    public function userbook(){
        return view('user_pages.service_provider_book_view');
    }
}
