<?php

namespace Store\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Store\TipoContato;
use Store\Contato;
use Store\Http\Requests;
use Store\Banner;
use Store\Grupo;

class ContatoController extends Controller
{
    //
    public function contato(){
        //recupera toso os tipos de contato na base de dados
        $tipocontato = TipoContato::all();
        
        return view('/contato',['tipocontato'=> TipoContato::all(),'banners'=>Banner::all(),'grupos'=>Grupo::all()]);
    }
}
