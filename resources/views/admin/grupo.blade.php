
@extends('layouts.admin')

@section('_head')
   <link href="{{url('css/contato.css')}}" rel="stylesheet">
   <link href="{{url('css/grupo.css')}}" rel="stylesheet">
@endsection

@section('content')

<div>
  <input type="button" value="Adicionar" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#frm" onclick="grupoController.novo();"> 
</div>

<div class="table-responsive">

    <table class="table table-sm table-hover table-bordered table-striped">
      <thead class="thead-default">
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Criado</th>
          <th>Ativo</th>
          <th>Editar</th>
          <th>Excluir</th>
        </tr>
      </thead>
      <tbody>
        
       @foreach ($grupos as $index => $grupo)
          <tr>
            <th data-value="id" scope="row">{{$grupo->id}}</th>
            <td data-value="nome" >{{$grupo->nome}}</td>
            <td data-value="criado">{{$grupo->created_at->format('d/m/y')}}</td>
            <td data-value="ativo">@if($grupo->ativo == 1) {{'Sim'}} @else  {{'Não'}}  @endif </td>
            <td class="text-center">
                  <input type="button" value="Editar" class="btn btn-primary btn" onclick="grupoController.update(event,{{$grupo->id}},this);" data-toggle="modal" data-target="#frm"> 
            </td>
            <td class="text-center"> 
                  <!--ação de deletar -->
                  {{ Form::open(array('url' => 'admin/grupo/'.$grupo->id,'class' => 'pull-rigth')) }}
                       {{ Form::hidden('_method','DELETE') }}
                       {{ Form::submit('Deletar',array('class' => 'btn btn-warning')) }}
                  {{ Form::close() }}
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>

<div id="frm" class="modal fade" tabindex="0" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        
        {{ Form::open(array('route' => 'routeGrupo','files'=> true)) }}

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>
                <h4 id='frmCabecalho' class="modal-title">Novo Grupo</h4>
            </div>

            <div class="modal-body">
            
                  <div class="form-group">   
                      {{Form::label('text','Nome: ')}}
                      {{Form::text('nome','',array('class'=>'form-control','placeholder'=>'Nome para o Grupo','id'=>'nome'))}}
                  </div>
                    {{Form::hidden('id','',array('id'=>'id'))}}
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
    <script src="{{url('js/controllers/grupoController.js')}}"></script>

    <script>    
         var grupoController = new GrupoController();
    </script>
@endsection


 
