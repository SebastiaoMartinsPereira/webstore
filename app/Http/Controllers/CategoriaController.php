<?php

namespace Store\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Store\Http\Requests;
use Store\Grupo;
use Store\Categoria;
use Input;
use Session;
use Store\Common;

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


    ///Incluir Categoria   
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
           
       
        /**Recupera Dados do grupo selecionado*/
        $grupo = Grupo::find($request->grupo);
        
        /**Verifica se a categoria já existe -> se não instancia um model Categoria*/
        if(Categoria::where('nome',$request->nome)->exists()){
            $model = Categoria::where('nome',$request->nome)->first();
        }else{
            $model = new Categoria();   
            
            $model->nome = $request->nome;   
        }


        /**Se a categoria já existia e estava relacionada ao grupo selecionado impede a inserção do relacionamento*/
        if(($model->id !== null) && ($grupo->categorias()->where('id',$model->id)->exists())) {
            return 'Teste';
            $request->session()->flash('alert-info', 'O grupo selecionado já possui esta categoria!');
        } else{
            $grupo->categorias()->save($model);
            $request->session()->flash('alert-success', 'Categoria adicionada com sucesso!');
        }
        return Redirect::route('routeCategoria');
    }

 
    ///Editar categoria
    public function update(Request $request)
    {
                        return response()->json([
                'name' => 'Abigail',
                'state' => 'CA'
                ]);


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


        $grupo = Grupo::find($request->grupo);
        
        if($request->id != ''){
            
            /** Recupera dados do grupo no momento do clique de editar*/
            $dados = Common::splitString($request->_aux);   
            $id_grupo_anterior = $dados[0][1];
             
            /**Salva a categoria*/
            $model = Categoria::find($request->id);
            $model->nome = $request->nome;   
            $model->save();
            
            /**Realiza a troca de categoria caso seja necessário*/
            if($grupo->id <> $id_grupo_anterior){
                $model->grupos()->detach($id_grupo_anterior);
                $model->grupos()->attach($grupo->id);
            } 
        }
         
        $mensagem = 'Categoria editada com sucesso!' ;      

        $request->session()->flash('alert-success',$mensagem);
      
        return Redirect::route('routeCategoria');
    }

     /**
     * Remove Categorias
     *
     * @param  int  $id
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($grupo_id,$categoria_id,Request $request)
    {
        
                return response()->json([
                'name' => $grupo_id,
                'state' => $categoria_id
                ]);


        return Redirect::route('routeCategoria');
        Session()->flash('alert-success','Relação entre grupo:'.$grupo->nome.' e categoria: '.$categoria->nome.' excluída com sucesso!');
 
         /** fasfa
         asdf
         asdf
         asdf
                 $grupo = Grupo::find($grupo_id);
        $categoria =  $grupo->categorias()->find($categoria_id);
        $grupo->categorias()->detach($categoria_id);
        
        Session()->flash('alert-success','Relação entre grupo:'.$grupo->nome.' e categoria: '.$categoria->nome.' excluída com sucesso!');
        return Redirect::route('routeCategoria'); 
        */
    }


}
/**$grupo_id,$categoria_id,*/