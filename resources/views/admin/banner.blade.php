
@extends('layouts.admin')

@section('_head')
   <link href="{{url('css/contato.css')}}" rel="stylesheet">
   <link href="{{url('css/banner.css')}}" rel="stylesheet">
@endsection

@section('content')

<div>
  <input type="button" value="Adicionar" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#frmBanner" onclick="bannerController.novo();"> 
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
          <th>Editar</th>
          <th>Excluir</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($banners as $index => $banner)
          <tr>
            <th data-value="id" scope="row">{{$banner->id}}</th>
            <td data-value="nome" >{{$banner->nome}}</td>
            <td data-value="link" class="link"><a href="{{$banner->link}}">{{$banner->link}}</a></td>
            <td data-value="criado">{{$banner->created_at->format('d/m/y')}}</td>
            <td data-value="path" class="sumido">{{$banner->path}}</td>
            <td data-value="cabecalho">{{$banner->cabecalho}}</td>
            <td data-value="descricao">{{$banner->descricao}}</td>
            <td data-value="ativo">@if($banner->ativo == 1) {{'Sim'}} @else  {{'Não'}}  @endif </td>
            <td class="text-center">
                  <input type="button" value="Editar" class="btn btn-primary btn" onclick="bannerController.editar(event,{{$banner->id}},this);" data-toggle="modal" data-target="#frmBanner"> 
            </td>
            <td class="text-center"> 
                  <!--ação de deletar-->
                  {{ Form::open(array('url' => 'admin/banner/'.$banner->id,'class' => 'pull-rigth')) }}
                       {{ Form::hidden('_method','DELETE') }}
                       {{ Form::submit('Deletar',array('class' => 'btn btn-warning')) }}
                  {{ Form::close() }}
            </td>
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
                <h4 id='frmCabecalho' class="modal-title">Novo Banner</h4>
            </div>

            <div class="modal-body">
            
                  <div class="form-group">   
                      {{Form::label('text','Nome: ')}}
                      {{Form::text('nome','',array('class'=>'form-control','placeholder'=>'Nome para o Banner','id'=>'nome'))}}
                  </div>

                  <div class="form-group">   
                      {{Form::label('text','Link: ')}}
                      {{Form::text('link','',array('class'=>'form-control','placeholder'=>'link a ser incluso no banner','id'=>'link'))}}
                  </div>

                  <div class="form-group">   
                      {{Form::label('text','Cabeçalho: ')}}
                      {{Form::text('cabecalho','',array('class'=>'form-control','placeholder'=>'Cabecalho da descrição.','id'=>'cabecalho'))}}
                  </div>
                  
                  <div class="form-group">   
                      {{Form::label('text','Descrição: ')}}
                      {{Form::text('descricao','',array('class'=>'form-control','placeholder'=>'Descrição do banner','id'=>'descricao'))}}
                  </div>

                    {{Form::hidden('MAX_FILE_SIZE','99999999')}}

                  <div class="form-group fuImagem">   
                      {{Form::label('text','Imagem: ')}}
                      {{ Form::file('imagem',array('class'=>'form-control imagem','id'=>'imagem','accept'=>'image/png, image/svg, image/jpeg, image/pjpeg')) }}
                  </div>
                  <div class="form-group" id="imgVisualizacao">
                      {{Form::label('text','Visualização: ')}}
                     <img id="imgDisplay" class="img img-responsive" src="" alt="">
                  </div>

                    {{Form::hidden('id','',array('id'=>'id'))}}
                    {{Form::hidden('path','',array('id'=>'path'))}}

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
    <script src="{{url('js/controllers/bannerController.js')}}"></script>

    <script>    
         var bannerController = new BannerController();
    </script>
@endsection


 
