
@extends('layouts.admin')

@section('_head')
  
@endsection

@section('content')

<div>
  <input type="button" value="Adicionar" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#frm" onclick="categoriaController.novo();"> 
</div>

<div class="table-responsive">

    <table class="table table-sm table-hover table-bordered table-striped">
      <thead class="thead-default">
        <tr>
          <th>#</th>
          <th>Categoria</th>
          <th>Grupo</th>
          <th>Criado Em</th>
          <th>Ativo</th>
          <th>Editar</th>
          <th>Excluir</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($grupos as $index => $grupo) 
             @foreach ($grupo->categorias as $iCategoria => $categoria)
                <tr>
                  <td data-value="grupo_id" class="display_none"> {{$grupo->id}}</td>
                  <td data-value="id"> {{$categoria->id}}</td>
                  <td data-value="categoria_nome"> {{$categoria->nome}}</td>
                  <td data-value="grupo_nome"> {{$grupo->nome}}</td>
                  <td data-value="criado_em">{{$categoria->created_at->format('d/m/y')}}</td>
                  <td data-value="ativo">@if($categoria->ativo == 1) {{'Sim'}} @else  {{'Não'}}  @endif </td>

                  <td class="text-center">
                    <input type="button" value="Editar" class="btn btn-primary btn" onclick="categoriaController.update(event,{{$categoria->id}},this);" data-toggle="modal" data-target="#frm"> 
                  </td>
                  <td class="text-center"> 
                        <!--ação de deletar -->
                        {{ Form::open(array('url' => 'admin/categoria/'.$categoria->id,'class' => 'pull-rigth')) }}
                            {{ Form::hidden('_method','DELETE') }}
                            {{ Form::submit('Deletar',array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}
                  </td>
                  
                </tr>
             @endforeach
          @endforeach
      </tbody>
    </table>
</div>

<div id="frm" class="modal fade" tabindex="0" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    
        {{ Form::open(array('route' => 'routeCategoria')) }}

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>
                <h4 id='frmCabecalho' class="modal-title">Nova Categoria</h4>
            </div>

            <div class="modal-body">

									<div class="form-group">
										{{Form::label('text','Grupo: ')}}
										<select id='grupos' name='grupo' class="form-control" placeholder="teste">
												<option value="0" selected='selected'></option>		
											@foreach ($grupos as $index => $grupo)
												<option value="{{$grupo->id}}">{{$grupo->nome}}</option>
											@endforeach
										</select>
									</div>

                  <div class="form-group">   
                      {{Form::label('text','Nome: ')}}
                      {{Form::text('nome','',array('class'=>'form-control','placeholder'=>'Nome para a Categoria','id'=>'nome'))}}
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
    <script src="{{url('js/controllers/categoriaController.js')}}"></script>

    <script>    
         let categoriaController = new CategoriaController($('#id'),$('#nome'),$('#grupos'),$('#frmCabecalho'));
    </script>
@endsection


 
