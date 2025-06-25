<?php

namespace App\Http\Controllers;

use App\Models\Compliant;
use App\Models\ServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ServiceProviderController extends Controller
{
    public function index()
    {
        return view('service_provider_pages.service_provider_dashboard_view');
    }
    public function edit($id)
    {
        return view('service_provider_pages.service_provider_update_view');
    }
    public function update(Request $request, $id) {
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
        ]);

        ServiceProvider::update([
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

        User::update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);
    }
    public function compliantList()
    {
        $complaint = Compliant::all();
        return view('service_provider_pages.compliant_list_view', compact('complaint'));
    }
    public function bookList()
    {
        return view('service_provider_pages.book_list_view');
    }

    public function complaintEdit($id)
    {
        $compliant = Compliant::find($id);
        return view('service_provider_pages.update_compliant_view', compact('compliant'));
    }
    public function complaintUpdate(Request $request, $id)
    {
        $request->validate([
            'complaint_status' => 'nullable|in:pending,going,complete'
        ]);

        $complaint = Compliant::find($id);
        $complaint->update($request->all());

        return redirect()->route('ServiceProvider.compliantList', $id);
    }
    public function complaintDelete($id){
        $complaint = Compliant::find($id);
        $complaint->delete();

        return redirect()->route('ServiceProvider.compliantList');
    }
}
