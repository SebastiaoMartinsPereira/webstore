
@extends('layouts.admin')

@section('_head')
   <link href="{{url('css/contato.css')}}" rel="stylesheet">
@endsection

@section('content')

<div>
  <input type="button" value="Adicionar" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#frmBanner"> 
</div>

<div class="table-responsive">

    <table class="table table-sm table-hover table-bordered table-striped">
      <thead class="thead-default">
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th class="link">Link</th>
          <th>Criado</th>
          <th class="sumido">Caminho</th>
          <th>Cabeçalho</th>
          <th>Descrição</th>
          <th>Ativo</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($banners as $index => $banner)
          <tr>
            <th scope="row">{{$banner->id}}</th>
            <td>{{$banner->nome}}</td>
            <td class="link"><a href="{{$banner->link}}">{{$banner->link}}</a></td>
            <td>{{$banner->created_at->format('d/m/y')}}</td>
            <td class="sumido">{{$banner->path}}</td>
            <td>{{$banner->cabecalho}}</td>
            <td>{{$banner->descricao}}</td>
            <td>@if($banner->ativo == 1) {{'Sim'}} @else  {{'Não'}}  @endif </td>
          </tr>
        @endforeach
      </tbody>
    </table>
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

                  <div class="form-group">   
                      {{Form::label('text','Cabeçalho: ')}}
                      {{Form::text('cabecalho','',array('class'=>'form-control','placeholder'=>'Cabecalho da descrição.'))}}
                  </div>

                  <div class="form-group">   
                      {{Form::label('text','Descrição: ')}}
                      {{Form::text('descricao','',array('class'=>'form-control','placeholder'=>'Descrição do banner'))}}
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

@section('_scripts')
@endsection


 
