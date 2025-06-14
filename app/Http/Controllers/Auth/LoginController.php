<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('components.auth.login');
    }
    public function login(Request $request){
        $credentials= $request->only('email','password');

        if(Auth::attempt($credentials)){
            $user = Auth::user();

            return match($user->role){
                'admin'=>redirect()->route(''),
                'service_provider' => redirect()->route(''),
                default=>redirect()->route(''),
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
