<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('admin_pages.create_user_view');
    }
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'nic' => 'required|unique:user_data,nic',
            'gender' => "required|in:male,female,others",
            'date_of_birth' => 'required',
            'email' => 'required|email|unique:user_data,email',
            'phone_number' => 'required|digits:10|unique:user_data,phone_number',
            'location' => 'required',
            // 'img' => 'required|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);
        //img upload code
        // if ($request->hasFile('img')) {
        //     $pictureFile = $request->file('img');
        //     $pictureFileName = time() . "." . $pictureFile->extension();
        //     $pictureFile->move(public_path('upload_img'), $pictureFileName);
        // } else {
        //     $pictureFileName = null;
        // }
        // dd($request);
        UserData::create([
            'full_name' => $request->full_name,
            'nic' => $request->nic,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'location' => $request->location,
            // 'img' => $pictureFileName,
        ]);
        return redirect()->route('Admin.usercreate');
    }
    public function edit($id)
    {
        $user = UserData::find($id);
        return view('admin_pages.update_user_view', compact('user'));
    }
    public function Update(Request $request, $id)
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
        return redirect()->route('Admin.userEdit', $id);
    }
    public function delete($id)
    {
        $user = UserData::find($id);
        $user->delete();
        return redirect()->route('Admin.userlist');
    }


    public function userlist()
    {
        $users = UserData::all();

        return view('admin_pages.user_list_view', compact('users'));
    }
}
