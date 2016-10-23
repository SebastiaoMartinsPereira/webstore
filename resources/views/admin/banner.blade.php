
@extends('layouts.admin')

@section('_head')
   <link href="{{url('css/contato.css')}}" rel="stylesheet">
@endsection

@section('content')

<div>
  <input type="button" value="Adicionar" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#frmBanner"> 
</div>

<div id="frmBanner" class="modal fade" tabindex="0" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

        {{ Form::open(array('route' => 'bannerStore','files'=> true)) }}

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>
                <h4 class="modal-title">Novo Banner</h4>
            </div>
            <div class="modal-body">
            
                  <div class="form-group">   
                      {{Form::label('text','Nome: ')}}
                      {{Form::text('nome','',array('class'=>'form-control','placeholder'=>'Nome para o Banner'))}}
                  </div>

                  <div class="form-group">   
                      {{Form::label('text','Link: ')}}
                      {{Form::text('link','',array('class'=>'form-control','placeholder'=>'link a ser incluso no banner'))}}
                  </div>
                      
                    {{Form::hidden('MAX_FILE_SIZE','99999999')}}

                  <div class="form-group">   
                      {{Form::label('text','Imagem: ')}}
                      {{ Form::file('imagem','',array('class'=>'form-control')) }}
                  </div>
                  
            </div>
            <div class="modal-footer">
              {{Form::submit('Fechar',array('class'=>'btn btn-default','data-dismiss'=>'modal')) }} 
              {{Form::submit('Salvar',array('class'=>'btn btn-primary')) }} 
            </div>

        {{ Form::close() }}

    </div>  <!--modal content-->
  </div> <!--modal dialog-->
</div> <!--modal-->

@endsection




 
