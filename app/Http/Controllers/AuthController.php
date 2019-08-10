<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Tamu;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password')))
        {
            
            return redirect('/tamu');
            
        }
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}
