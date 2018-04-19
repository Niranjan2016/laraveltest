<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;

class CustomAuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('custom.register');
    }

    public function register(Request $request)
    {
        $this->validation($request);
        $request['password'] = bcrypt($request->password);
        User::create($request->all());
        return redirect('/')->with('Status', 'You have registered successfully!');
    }

    public function showLoginForm()
    {
        return view('custom.login');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|max:15',
        ]);
        if (Auth::attempt(['email'=> $request->email, 'password'=> $request->password ])) {
            return redirect('/')->with('Status', 'You have logged in successfully!');
        }
        return 'Email and/or password mismatch!';
    }

    public function validation($request)
    {
        return $validatedData = $request->validate([
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|max:15',
        ]);
    }
}
