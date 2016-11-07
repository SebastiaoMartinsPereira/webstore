<?php

namespace Store\Http\Controllers;

use Illuminate\Http\Request;

use Store\Http\Requests;
use Store\Banner;
use Store\Grupo;

use Auth;

class loginController extends Controller
{
    public function login(){
         return view('auth.login',['banners'=>Banner::all(),'grupos'=>Grupo::all()]);
    }

    public function logout(){
         Auth::logout();
         return view('auth.login',['banners'=>Banner::all(),'grupos'=>Grupo::all()]);
    }
}
