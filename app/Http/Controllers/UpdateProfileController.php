<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UpdateProfileController extends Controller
{
    public function index(){
        return view('account.account-settings');
    }

    public function update(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'beasiswa' => 'required',
        ]);

        $user = User::where('email', Auth::user()->email)->first();
        $user->name = $validateData['name'];
        $user->email = $validateData['email'];
        $user->beasiswa = $validateData['beasiswa'];
        $user->save();
        return redirect()->route('home');
    }
}
