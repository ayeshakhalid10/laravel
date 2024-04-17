<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class SignupController extends Controller
{
    public function index()
    {
        return view('Signup');
    }
    public function store(Request $request)
    {
        //validate
        $this->validate($request, [
            'email' => 'required|email|unique:users,email|max:100', 
            'password' => 'required|confirmed',
        ]);

        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('Login');
    }
}
