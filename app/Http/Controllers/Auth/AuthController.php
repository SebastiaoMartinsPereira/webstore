<?php

namespace Store\Http\Controllers\Auth;

use Illuminate\Http\Request;

use Store\Http\Requests;

class AuthController extends Controller
{
        use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout','banners'=>Banner::all(),'grupos'=>Grupo::all()]);
    }
}
