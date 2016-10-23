<?php

namespace Store\Http\Controllers;

use Illuminate\Http\Request;

use Store\Http\Requests;

class RegisterController extends Controller
{
    //
    public function register(){
         return view('auth.register');
    }
}
