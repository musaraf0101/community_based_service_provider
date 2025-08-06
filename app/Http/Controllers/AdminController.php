<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDashboard(){

      return view('admin.dashboard');  
    }
    public function showBooking(){
      return view('admin.booking_list');
    }
    public function deleteBooking($id){
      
    }
}
