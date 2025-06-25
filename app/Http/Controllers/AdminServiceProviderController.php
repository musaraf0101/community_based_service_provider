<?php

namespace App\Http\Controllers;

use App\Models\ServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminServiceProviderController extends Controller
{
    public function Create()
    {

        return view('admin_pages.create_service_provider_view');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nic' => 'required|unique:service_providers,nic',
            'gender' => 'required|in:male,female,others',
            'date_of_birth' => 'required',
            'profession' => 'required',
            'email' => 'required|unique:service_providers,email',
            'phone_number' => 'required|digits:10|unique:service_providers,phone_number',
            'password' => 'required|string|confirmed|min:6',
            'location' => 'required|in:colombo,gampaha,kalutara,kandy,matale,nuwara-eliya,
                            galle,matara,hambantota,jaffna,kilinochchi,mannar,
                            mullaitivu,vavuniya,ampara,batticaloa,trincomalee,
                            kurunegala,puttalam,anuradhapura,polonnaruwa,badulla,monaragala,kegalle,ratnapura',
            'role' => 'required',
            'description' => 'required|string|max:255',
            // 'img' => 'required|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);

        //img upload
        // if ($request->hasFile('img')) {
        //     $pictureFIle = $request->file('img');
        //     $pictureFIleName = time() . "." . $pictureFIle->extension();
        //     $pictureFIle->move(public_path('upload_img'), $pictureFIleName);
        // } else {
        //     $pictureFIleName = null;
        // }

        ServiceProvider::create([
            'name' => $request->name,
            'nic' => $request->nic,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'profession' => $request->profession,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'location' => $request->location,
            'description' => $request->description,
            // 'img' => $pictureFIleName,
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        return redirect()->route('AdminServiceProvider.create');
        // dd($request);
    }
    public function edit($id){
        $provider = ServiceProvider::find($id);
        return view('admin_pages.update_service_provider_view',compact('provider'));
    }
    public function Update(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'nic' => 'required|unique:service_providers,nic,' . $id,
            'gender' => 'required',
            'date_of_birth' => 'required',
            'profession' => 'required',
            'email' => 'required|unique:service_providers,email,' . $id,
            'phone_number' => 'required|digits:10|unique:service_providers,phone_number,' . $id,
            'location' => 'required'
        ]);

        // ServiceProviderData::create([
        //     'full_name' => $request->full_name,
        //     'nic' => $request->nic,
        //     'gender' => $request->gender,
        //     'date_of_birth' => $request->date_of_birth,
        //     'profession' => $request->profession,
        //     'email' => $request->email,
        //     'phone_number' => $request->phone_number,
        //     'location' => $request->location
        // ]);
        $provider = ServiceProvider::find($id);
        $provider->update($request->all());
        return redirect()->route('Admin.userEdit' , compact('provider'), $id);
    }
    public function delete($id)
    {
        $provider = ServiceProvider::find($id);
        $provider->delete();
        return redirect()->route('AdminServiceProvider.serviceproviderlist');
    }


    public function serviceproviderlist()
    {
        $providers = ServiceProvider::all();

        return view('admin_pages.service_provider_list_view', compact('providers'));
    }
}
