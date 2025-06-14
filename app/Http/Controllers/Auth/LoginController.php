<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('common_pages.auth.login_view');
    }
    public function login(Request $request){
        $credentials= $request->only('email','password');

        if(Auth::attempt($credentials)){
            $user = Auth::user();

            return match($user->role){
                'admin'=>redirect()->route('Admin.index'),
                'service_provider' => redirect()->route('ServiceProvider.index'),
                default=>redirect()->route('User.index'),
            };
        }
        return back()->withErrors([
            'email'=>'invalid credentials',
        ]);
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
