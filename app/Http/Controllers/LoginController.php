<?php

namespace Store\Http\Controllers;

use Illuminate\Http\Request;

use Store\Http\Requests;

class loginController extends Controller
{
    public function login(){
         return view('auth.login');
    }
}
