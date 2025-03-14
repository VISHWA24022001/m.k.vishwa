<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function authenticate ( Request $request){

        $request->validate([
            'email'=>'required',
                'password'=>'required'


        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email'=>$email,'password'=>$password])) {

            $user = User::where('email', $email)->first();

            Auth::login($user);
            return redirect('/home');

        } else {
            return back()->withErrors(['Invaild credentials!']);
        }


    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
