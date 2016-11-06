<?php

namespace Store\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Store\Banner;
use Input;
use Session;
//use Request;

class BannerController extends Controller
{
     //
    public function index(){
        return view('/admin.banner')->with('banners',Banner::all());
    }

    public function store(Request $request)
    {
        $destinationPath;
        $extension;
        $fileName;
        $input = [];

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

            $banner = Banner::find($request->id);

            $banner->path  = $request->path;
            $banner->nome = $request->nome;
            $banner->link = $request->link;
            $banner->cabecalho = $request->cabecalho;
            $banner->descricao = $request->descricao;
        }
        else 
        {
            //Verifica se existe uma imagem selecionada
            if (!$request->hasFile('imagem')) {
                $request->session()->flash('alert-danger', 'Faltou selecionar o banner!');
                return Redirect::route('bannerIndex');
            }

            // checking file is valid.
            if (!$request->file('imagem')->isValid()) {
                // sending back with error message.
                Session::flash('error', 'O arquivo é inválido!');
                return Redirect::route('bannerIndex');
            }

            $destinationPath = 'img/banner'; // upload path
            $extension = $request->file('imagem')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            $request->file('imagem')->move($destinationPath, $fileName); // uploading file to given path
            

            $banner = new Banner();
            $banner->path = $destinationPath.'\\'.$fileName;
            $banner->nome = $request->nome;
            $banner->link = $request->link;
            $banner->cabecalho =$request->cabecalho;
            $banner->descricao =$request->descricao;
                    
         }
      
      is_null($banner->id) ? $mensagem = 'Banner adicionado com sucesso!': $mensagem = 'Banner editado com sucesso!' ;
         
      $request->session()->flash('alert-success',$mensagem);
      
      $banner->save(); 

      return Redirect::route('bannerIndex');

    }
  
    public function delete($id,Request $request){

        Banner::find($id)->delete();
        Session()->flash('alert-warning','Banner excluido com sucesso!');
        return Redirect::route('bannerIndex');
    }
}
