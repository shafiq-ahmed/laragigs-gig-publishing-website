<?php

namespace App\Http\Controllers;

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
        dd($request);
        $formfields=$request->validate([
            'name'=>'required',
            'email'=> ['required',Rule::unique('users','email')],
            'password'=>'required'
        ]);
    }
}
