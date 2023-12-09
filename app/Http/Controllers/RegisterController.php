<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function register(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'beasiswa' => 'required',
            'email' => 'required|email',
            'password' => 'required|alpha_num|min:8|confirmed',
            'password_confirmation' => 'required'
        ]);

        
        $hashedPassword = $validateData['password'];
        $hashedPassword = Hash::make($hashedPassword);

        $user = new User();
        $user->name = $validateData['name'];
        $user->email = $validateData['email'];
        $user->password = $hashedPassword;
        $user->beasiswa = $validateData['beasiswa'];
        $user->save();

        return redirect()->route('home');
    }
}
