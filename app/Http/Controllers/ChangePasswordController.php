<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index(){
        return view('account.change-password');
    }

    public function changePassword(Request $request){
        $validateData = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed|alpha_num',
            'new_password_confirmation' => 'required'
        ]);

        $user = User::where('id', Auth::user()->id)->first();
        
        if(Hash::check($validateData['old_password'], $user->password)){
            $user->password = Hash::make($validateData['new_password']);
            $user->save();

            return redirect()->route('home');
        }
        else{
            return redirect()->back()->withErrors(["no_match" => "The current password you entered is wrong!"]);
        }
    }
}
