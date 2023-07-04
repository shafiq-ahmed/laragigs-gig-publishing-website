<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        //dd($request);
        $formfields=$request->validate([
            'name'=>['required','min:3'],
            'email'=> ['required','email',Rule::unique('users','email')],
            'password'=>['required','confirmed','min:6']
        ]);

        //Hash password
        $formfields['password']=bcrypt($formfields['password']);

        //create user
        $user=User::create($formfields);

        //Login
        auth()->login($user);

        return redirect('/listings')->with('message','User created successfully!');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/listings')->with('message','You have been logged out');
    }

    public function login()
    {
        return view('users.login');
    }
}
