<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $validateData = $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);

        $creds = $request->only('email', 'password');
        
        if(Auth::attempt($creds)){
            return redirect()->route('home');
        }
        else{
            return redirect()->back()->withErrors(['password' => 'Invalid or Wrong Password']);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('landing');
    }
}
