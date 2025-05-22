<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin_pages.admin_dashboard_view');
    }
    public function usercreate()
    {
        return view('admin_pages.create_user_view');
    }
    public function userstore(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'nic' => 'required|unique:user_data,nic',
            'gender' => "required|in:male,female,others",
            'date_of_birth' => 'required',
            'email' => 'required|email|unique:user_data,email',
            'phone_number' => 'required|digits:10|unique:user_data,phone_number',
            'location' => 'required',
            'img' => 'required|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        //img upload code
        if ($request->hasFile('img')) {
            $pictureFile = $request->file('img');
            $pictureFileName = time() .".". $pictureFile->extension();
            $pictureFile->move(public_path('upload_img'), $pictureFileName);
        } else {
            $pictureFileName = null;
        }
        // dd($request);
        UserData::create([
            'full_name' => $request->full_name,
            'nic' => $request->nic,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'location' => $request->location,
            'img' => $pictureFileName,
        ]);

        return redirect()->route('Admin.usercreate');
    }
    public function serviceproviderCreate()
    {
        return view('admin_pages.create_service_provider_view');
    }
    public function userlist()
    {
        return view('admin_pages.user_list_view');
    }
    public function serviceproviderlist()
    {
        return view('admin_pages.service_provider_list_view');
    }
    public function admincompliantlist()
    {
        return view('admin_pages.compliant_list_view');
    }
}
