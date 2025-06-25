<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Compliant;
use App\Models\ServiceProvider;
use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('user_pages.user_dashboard_view');
    }
    public function compliantcreate()
    {   
        return view('user_pages.create_compliant_view');
    }
    public function compliantstore(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'service_date' => 'required',
            'email' => 'required',
            'phone_number' => 'required|digits:10',
            'location' => 'required',
            'compliant' => 'required',
            'service_provider_name' => 'required',
            'profession' => 'required',
            // 'compliant_img' => 'required|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);

        // if ($request->hasFile('compliant_img')) {
        //     $comp_img = $request->file('compliant_img');
        //     $com_img = time() . "." . $comp_img->extension();
        //     $comp_img->move(public_path('upload_img'), $com_img);
        // } else {
        //     $comp_img = null;
        // }
        // dd($request);
        Compliant::create([
            'full_name' => $request->full_name,
            'service_date' => $request->service_date,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'location' => $request->location,
            'compliant' => $request->compliant,
            'service_provider_name' => $request->service_provider_name,
            'profession' => $request->profession,
            // 'compliant_img' => $com_img,
        ]);
        return redirect()->route('User.compliantcreate');
    }
    public function userEdit($id)
    {
        $user = UserData::find($id);
        return view('user_pages.update_user_view', compact('user'));
    }
    public function userupdate(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'nic' => 'required|unique:user_data,nic,' . $id,
            'gender' => "required|in:male,female,others",
            'date_of_birth' => 'required',
            'email' => 'required|email|unique:user_data,email,' . $id,
            'phone_number' => 'required|digits:10|unique:user_data,phone_number,' . $id,
            'location' => 'required',
        ]);
        $user = UserData::find($id);
        $user->update($request->all());

        return redirect()->route('', compact('user'),$id);
    }
    public function serviceproviderlist()
    {
        $providers = ServiceProvider::all();
        return view('user_pages.service_provider_list_view', compact('providers'));
    }
    public function userbook()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        else{
            return view('user_pages.service_provider_book_view');
        }
        
    }
    public function userbookStore(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'nic' => 'required|string|max:12',
            'service_type' => 'required|in:Mechanic,Electrician,Plumber,Cleaner,Painter',
            'email' => 'required|email',
            'phone_number' => 'required|digits:10',
            'location' => 'required|string|max:255',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required||unique:bookings,time'
        ]);

        Booking::create([
            'full_name' => $request->full_name,
            'nic' => $request->nic,
            'service_type' => $request->service_type,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'location' => $request->location,
            'date' => $request->date,
            'time' => $request->time,
        ]);

        return redirect()->route('User.userbook');
    }
}
