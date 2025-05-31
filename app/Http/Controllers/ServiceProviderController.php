<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function index()
    {
        return view('service_provider_pages.service_provider_dashboard_view');
    }
    public function edit()
    {
        return view('service_provider_pages.service_provider_update_view');
    }
    public function update() {}
    public function compliantList()
    {
        return view('service_provider_pages.compliant_list_view');
    }
    public function bookList()
    {
        return view('service_provider_pages.book_list_view');
    }
}
