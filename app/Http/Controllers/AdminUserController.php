<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('admin_pages.create_user_view');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nic' => 'required|unique:user_data,nic',
            'gender' => "required|in:male,female,others",
            'date_of_birth' => 'required',
            'email' => 'required|email',
            'password' => 'required|string|confirmed|min:6',
            'phone_number' => 'required|digits:10|unique:user_data,phone_number',
            'location' => 'required',
            'role' => 'required',
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
            'name' => $request->full_name,
            'nic' => $request->nic,
            'gender' => $request->gender,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'phone_number' => $request->phone_number,
            'location' => $request->location,
            // 'img' => $pictureFileName,
        ]);

        User::create([
            'name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
        return redirect()->route('AdminUser.index');
    }
    public function edit($id)
    {
        $user = UserData::find($id);
        return view('admin_pages.update_user_view', compact('user'));
    }
    public function Update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nic' => 'required|unique:user_data,nic,' . $id,
            'gender' => "required|in:male,female,others",
            'date_of_birth' => 'required',
            'email' => 'required|email|unique:user_data,email,' . $id,
            'phone_number' => 'required|digits:10|unique:user_data,phone_number,' . $id,
            'location' => 'required',
        ]);
        $user = UserData::find($id);
        $user->update($request->all());
        return redirect()->route('Admin.userEdit', $id, compact('user'));
    }
    public function delete($id)
    {
        $user = UserData::find($id);
        $user->delete();
        return redirect()->route('AdminUser.userlist');
    }


    public function userlist()
    {
        $users = UserData::all();

        return view('admin_pages.user_list_view', compact('users'));
    }
}
