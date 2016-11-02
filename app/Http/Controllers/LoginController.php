<?php

namespace Store\Http\Controllers;

use Illuminate\Http\Request;

use Store\Http\Requests;

use Auth;

class loginController extends Controller
{
    public function login(){
         return view('auth.login');
    }

    public function logout(){
         Auth::logout();
         return view('auth.login');
    }
}
