<?php

namespace Store\Http\Controllers;

use Illuminate\Http\Request;

use Store\Http\Requests;

class AdminController extends Controller
{
         //
    public function painel(){
        //recupera toso os tipos de contato na base de dados
       //$tipocontato = TipoContato::all();
        return view('/admin.admin');
    }
}
