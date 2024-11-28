<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;


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
            'password.required' => 'Password must be filled'
        ]);

        $logininfo = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($logininfo)){
            return 'sukses';
            // return redirect('mainoage')
        }else{
            return redirect('auth')->withErrors(['login' => 'Username or Password is invalid']);
        }
    }

    function logout(){
        Auth::logout();
        return redirect('mainpage')->with('success', 'You Already Log Out');
    }

    function register(){
        return view('auth/register');
    }


    function create(Request $request){
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        Session::flash('phone_number', $request->phone);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|regex:/^[0-9]{10,15}$/',
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*?&#]/',
            ],
            'confirmpass' => 'required|same:password'
        ], [
            'name.required' => 'Name must be filled',
            'email.required' => 'Email must be filled',
            'email.email' => 'Email is not valid',
            'email.unique' => 'Email has been used',
            'phone_number.required' => 'Phone must be filled',
            'password.required' => 'Password must be filled',
            'password.min' => 'Password must at least 8 characters',
            'password.regex' => 'Password must include at least 1 uppercase letter, 1 lowercase letter, 1 number, and 1 special character',
            'confirmpass.required' => 'Confirm Password must be filled',
            'confirmpass.same' => 'Confirm Password must match the password'
        ]);

        $data = [
            'name' =>$request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password)
        ];

        User::create($data);

        $logininfo = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($logininfo)){
            return('sukses');
            // return redirect('/mainpage')->with('success', 'Registration successful! You are now logged in.');
        } else {
            return redirect('/auth/register')->withErrors('An error occurred. Please try again.');
        }

    }
}
