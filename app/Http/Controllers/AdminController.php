<?php

namespace App\Http\Controllers;

use App\Models\Compliant;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function index()
    {
        return view('admin_pages.admin_dashboard_view');
    }
    public function admincompliantlist()
    {
        $compliants = Compliant::all();
        return view('admin_pages.compliant_list_view', compact('compliants'));
    }
}
