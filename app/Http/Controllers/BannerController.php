<?php

namespace Store\Http\Controllers;

use Illuminate\Http\Request;

use Store\Http\Requests;

use Illuminate\Support\Facades\Redirect;

use Input;
use Session;

class BannerController extends Controller
{
     //
    public function form(){
        //recupera toso os tipos de contato na base de dados
       //$tipocontato = TipoContato::all();
        return view('/admin.banner');
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
             
                // sending back with message
                Session::flash('success', 'Upload successfully');

                //return ($destinationPath.'/'.$fileName);
                return Redirect::route('bannerForm');
            }
            else {

                // sending back with error message.
                Session::flash('error', 'uploaded file is not valid');
                return Redirect::route('bannerForm');
            }
        }else{
             return Redirect::route('bannerForm');
        }

    }
}
