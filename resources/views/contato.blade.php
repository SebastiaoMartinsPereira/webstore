@extends('layouts.app')

@section('_head')
  <link href="{{url('css/contato.css')}}" rel="stylesheet">
@endsection

@section('content')

<div id="painel-contato" class="col-md-8 col-md-offset-2">
  <div class="panel panel-default">
    <div class="panel-heading">Formulário de Contato</div>
    <div class="panel-body"> 
      <form class="form-horizontal">
          <fieldset>
            
            <div class="form-group">
              <label for="nome" class="col-lg-2 control-label">Nome</label>
              <div class="col-lg-10">
                <input class="form-control" id="nome" name="nome" placeholder="Nome Completo" type="password">
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
                <input class="form-control" name="email" id="email" placeholder="Email" type="text">
              </div>
            </div>
            <div class="form-group">
              <label for="select" class="col-lg-2 control-label">Motivo</label>
              <div class="col-lg-10">
                <select class="form-control" name="tipocontato_id" id="tipocontato">
                @foreach ($tipocontato as $tc) 
                    @if($tc->nome=='Sugestão')
                        <option value="{{$tc->id}}"  selected="selected"> {{$tc->nome}}</option>
                    @else
                          <option value="{{$tc->id}}"> {{$tc->nome}}</option>
                    @endif
                @endforeach
                </select>
                <br>
              </div>
            </div>
            
            <div class="form-group">
              <label for="textArea" class="col-lg-2 control-label">Mensagem</label>
              <div class="col-lg-10">
                <textarea class="form-control" rows="3" id="textArea"></textarea>
                <span class="help-block">Como podemos lhe ajudar?</span>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </div>
          </fieldset>
        </form>
    </div>
  </div>
</div>
@endsection
