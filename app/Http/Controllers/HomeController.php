<?php

namespace Store\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Store\Banner;
use Store\Grupo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('home',['banners'=>Banner::all(),'grupos'=>Grupo::all()]);
    }
}
