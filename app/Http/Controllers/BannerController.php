<?php

namespace Store\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Store\Banner;
use Input;
use Session;
use Requests;

class BannerController extends Controller
{
     //
    public function form(){
        return view('/admin.banner')->with('banners',Banner::all());;
    }

    public function store(Request $request)
    {
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

        if ($request->hasFile('imagem')) 
        {
            // checking file is valid.
            if ($request->file('imagem')->isValid()) {

                $destinationPath = 'img/banner'; // upload path
                
                $extension = $request->file('imagem')->getClientOriginalExtension(); // getting image extension
                
                $fileName = rand(11111,99999).'.'.$extension; // renameing image
                
                $request->file('imagem')->move($destinationPath, $fileName); // uploading file to given path
             
                Banner::firstOrCreate(['path' => $destinationPath.'\\'.$fileName
                                    ,'nome'=> $request->nome
                                    ,'link'=>$request->link
                                    ,'cabecalho'=>$request->cabecalho
                                    ,'descricao'=>$request->descricao
                                    ]);

                // sending back with message
                $request->session()->flash('alert-success', 'Banner adicionado com sucesso!');

                return Redirect::route('bannerForm');
            }
            else {

                // sending back with error message.
                Session::flash('error', 'O arquivo é inválido!');
                return Redirect::route('bannerForm');
            }
        }else{
             $request->session()->flash('alert-danger', 'Faltou selecionar o banner!');
             return Redirect::route('bannerForm');
        }

    }
}
