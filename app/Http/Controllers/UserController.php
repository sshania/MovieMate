<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Studio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::get();
        return view('admin/user/index', ['userList' => $users]);
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('admin/user/edit', ['userData' => $user]);
    }

    public function update(Request $request, $id){
        $oldUser = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $oldUser->id,
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

        $oldUser->update($data);
        return redirect(route('admin.user.index'))->with([
            'status' => 'success',
            'message' => 'User berhasil di update',
        ]);
    }

    public function destroy($id){
        $oldUser = User::findOrFail($id);
        $oldUser->delete();

        return redirect(route('admin.user.index'))->with([
            'status' => 'success',
            'message' => 'User berhasil di hapus',
        ]);
    }
}
