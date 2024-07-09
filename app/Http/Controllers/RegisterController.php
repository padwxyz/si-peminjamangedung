<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'name' => 'required| min:4| max:255',
            'nim' => 'required| max:10| regex:/^([0-9\s\-\+\(\)]*)$/|',
            'email' => 'required| email:dns| max:255',
            'phone_number' => 'required| regex:/^([0-9\s\-\+\(\)]*)$/| min:10 ',
            'faculty' => 'required| min:4| max:225',
            'prodi' => 'required| min:4| max:225',
            'password' => 'required| min:5',
            'password_confirmation' => 'required| same:password',
        ]);
        $validated['password'] = Hash::make($validated['password']);
        // dd($validated);
        User::create($validated);

        return redirect('/login')->with('success', 'Registered Successfully, Please Login');
    }
}
