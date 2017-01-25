
@extends('layouts.admin')

@section('_head')
    <link href="{{url('css/form-cadastro-produto.css')}}" rel="stylesheet">  
@endsection

@section('content')

<div>
  <input type="button" value="Adicionar" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#frmProduto" onclick="categoriaController.novo();"> 
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

      </tbody>
    </table>
</div>
 
@include('layouts.form_cadastroProduto')

@include('layouts.form_confirmar',array('cabecalho'=>'Deletar','msg'=>'Deseja relamente deletar a relação Grupo e Categoria selecionada?','btn1msg'=>'Fechar','btn2Msg'=>'Confirmar','evtclick'=>'categoriaController.destroy(event,this);'))

@endsection

@section('_scripts')
    <script src="{{url('js/controllers/categoriaController.js')}}"></script>
    <script src="{{url('js/services/ajaxService.js')}}"></script>
    <script>    
         //let categoriaController = new CategoriaController($('#id'),$('#nome'),$('#grupos'),$('#frmCabecalho'),$('#_method'),$('#_aux'),$('#form_confirmar_btn2'));

        //inicializar o tooltip do bootstrap
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>
@endsection


 
