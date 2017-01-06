<?php

namespace Store\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Store\Http\Requests;
use Store\Grupo;
use Store\Categoria;
use Input;
use Session;

class CategoriaController extends Controller
{
    //
    public function index(){
        try{
            return view('/admin.categoria')->with('grupos',Grupo::with('categorias')->get());
        }catch(Exception $e)
        {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
    }

          
    public function store(Request $request)
    {
        $model;

        // getting all of the post data
        //$file = array('image' => $request->file('imagem'));
        
        // // setting up rules
        // $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000

        // // doing the validation, passing post data, rules and the messages
        // //$validator = Validator::make($file, $rules);

        // if ($validator->fails()) {
        //     // send back to the page with the input data and errors
        //     return Redirect::to('upload')->withInput()->withErrors($validator);
        // }
        

        //Editando
        if($request->id != ''){
            $model = Categoria::find($request->id); 
        }
        else 
        {
            $model = new Categoria();
        }

       $grupo = Grupo::find($request->grupo);    
       $model->nome = $request->nome;    
       $grupo->categorias()->save($model);

       is_null($model->id) ? $mensagem = 'Categoria adicionada com sucesso!': $mensagem = 'Categoria editado com sucesso!' ;        
       $request->session()->flash('alert-success',$mensagem);
       return Redirect::route('routeCategoria');

    }

}
