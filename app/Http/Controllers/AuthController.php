<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function index(){
        return view('auth/index');
    }

    function login(Request $request){
        Session::flash('email', $request->email);

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email must be filled',
            'password.requires' => 'Password must be filled'
        ]);

        $logininfo = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($logininfo)){
            return 'sukses';
            // return redirect('mainoage')
        }else{
            return redirect('auth')->withErrors('Username or Password is invalid');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('mainpage')->with('success', 'You Already Log Out');
    }
}
