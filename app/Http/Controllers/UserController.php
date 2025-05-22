<?php

namespace App\Http\Controllers;

use App\Models\CompliantData;
use App\Models\ServiceProviderData;
use Illuminate\Http\Request;

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
            'compliant_img' => 'required|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);
        
        if($request->hasFile('compliant_img')){
            $comp_img = $request->file('compliant_img');
            $com_img = time() . "." . $comp_img->extension();
            $comp_img->move(public_path('upload_img'),$com_img);
        }else{
            $comp_img=null;
        }
        // dd($request);
        CompliantData::create([
            'full_name' => $request->full_name,
            'service_date' => $request->service_date,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'location' => $request->location,
            'compliant' => $request->compliant,
            'service_provider_name' => $request->service_provider_name,
            'profession' => $request->profession,
            'compliant_img' => $com_img,
        ]);
        return redirect()->route('User.compliantcreate');
    }
    public function userupdate()
    {
        return view('user_pages.update_user_view');
    }
    public function userserviceproviderlist()
    {
        $providers = ServiceProviderData::all();
        return view('user_pages.service_provider_list_view', compact('providers'));
    }
    public function userbook()
    {
        return view('user_pages.service_provider_book_view');
    }
}
