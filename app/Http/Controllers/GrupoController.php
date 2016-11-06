<?php

namespace Store\Http\Controllers;

use Illuminate\Http\Request;
use Store\Http\Requests;
use Illuminate\Support\Facades\Redirect;

use Store\Grupo;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            return view('/admin.grupo')->with('grupos',Grupo::all());

        }catch(Exception $e)
        {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 
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
            $model = Grupo::find($request->id); 
        }
        else 
        {
            $model = new Grupo();
         }
      
      $model->nome = $request->nome;

      is_null($model->id) ? $mensagem = 'Grupo adicionado com sucesso!': $mensagem = 'Grupo editado com sucesso!' ;
         
      $request->session()->flash('alert-success',$mensagem);
      
      $model->save(); 

      return Redirect::route('routeGrupo');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
         Grupo::find($id)->delete();

        Session()->flash('alert-warning','Grupo excluído com sucesso!');
        return Redirect::route('routeGrupo');

    }
}
