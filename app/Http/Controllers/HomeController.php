<?php

namespace Store\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Store\Banner;
use Store\Grupo;
use Store\Categoria;

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
        $grupos = Grupo::with('categorias')->get();
        $categorias = Categoria::get();
        return view('home',['banners'=>Banner::all(),'grupos'=>$grupos,'categorias'=>$categorias]);
    }
}
