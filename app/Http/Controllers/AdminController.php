<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin_pages.admin_dashboard_view');
    }
    public function usercreate(){
        return view('admin_pages.create_user_view');
    }
    public function serviceproviderCreate(){
        return view('admin_pages.create_service_provider_view');
    }
    public function userlist(){
        return view('admin_pages.user_list_view');
    }
    public function serviceproviderlist(){
        return view('admin_pages.service_provider_list_view');
    }
    public function admincompliantlist(){
        return view('admin_pages.compliant_list_view');
    }
}
