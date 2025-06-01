<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Psy\Util\Str;

class LoginController extends Controller
{
    public function index()
    {
         return view('Authentication.register');
    }
    public function store(StoreUserRequest $request){

        $validated = $request->validated();

        User::create([
            'name' =>$validated['name'],
            'userName' =>$validated['userName'],
            'phone' =>$validated['phone'],
            'email' =>$validated['email'],
            'password' =>Hash::make($validated['password']),
            'remember_token' => $validated['remember_token'],


        ]);
        return redirect()->route('central.index');
    }
    public function login(){
        $users = User::all();
        return view('Authentication.login',compact('users'));
    }

    public function loginUser(Request $request){
        $validated = $request->validate([
            'userName' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->route('central.index');
        };

    }

}
