
<div id="frmProduto" class="modal fade" tabindex="0" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{ Form::open(array('route' => 'routeProduto','files'=> true)) }}

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                    <h4 id='frmCabecalho' class="modal-title">Novo Produto</h4>
                </div>

                <div class="modal-body">

                    <div class="form-group">   
                        {{Form::label('nome','Nome: ')}}
                        {{Form::text('nome','',array('class'=>'form-control','placeholder'=>'Nome do produto','id'=>'nome'))}}
                    </div>

                    <div class="form-group">   
                        {{Form::label('link','Link: ')}}
                        {{Form::text('link','',array('class'=>'form-control','placeholder'=>'link a ser incluso no produto','id'=>'link'))}}
                    </div>

                    <div class="form-group">   
                        {{Form::label('descricao','Descrição: ')}}
                        {{Form::text('descricao','',array('class'=>'form-control','placeholder'=>'Descrição do produto','id'=>'descricao'))}}
                    </div>

                    <div class="row produto-destaque">
                        <div class="col-md-4">
                            <div class="input-group">
                                {{Form::label('destaque','Destaque',array('class'=>'form-control left'))}}
                                <span class="input-group-addon">
                                    {{Form::checkbox('destaque', '0', false,array('aria-label'=>'Novidade','data-toggle'=>'tooltip','data-placement'=>'top','title'=>'mostra o produto na home page.'))}}        
                                </span>
                            </div> 
                       </div>
                       <div class="col-md-4">
                            <div class="input-group">
                                {{Form::label('novidade','Novidade',array('class'=>'form-control left'))}}
                                <span class="input-group-addon">
                                    {{Form::checkbox('novidade', '0', false,array('data-toggle'=>'tooltip','data-placement'=>'top','title'=>'mostra o produto como novidade na lista de coleções.'))}}     
                                </span>
                            </div> 
                        </div> 
                    </div><!-- /.row -->

                    <fieldset class="form-group">
                        <legend>Preço</legend>
                        <div class="row">  
                            <div class="col-md-6">
                                {{Form::label('custo','Custo: ')}}
                                <div class="input-group input-group-sm">   
                                    <span class="input-group-addon">$</span>
                                    {{Form::text('custo','',array('class'=>'form-control','placeholder'=>'link a ser incluso no produto','id'=>'link'))}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                {{Form::label('venda','Venda: ')}}
                                <div class="input-group input-group-sm">   
                                    <span class="input-group-addon">$</span>
                                    {{Form::text('venda','',array('class'=>'form-control','placeholder'=>'link a ser incluso no produto','id'=>'link'))}}
                                </div>
                            </div>
                        </div>
                    </fieldset>
 
                    <div class="form-group fuImagem">   
                        {{Form::label('imagem','Imagem: ')}}
                        {{ Form::file('imagem',array('class'=>'form-control imagem','id'=>'imagem','accept'=>'image/png, image/svg, image/jpeg, image/pjpeg')) }}
                    </div>
                    <div class="form-group" id="imgVisualizacao">
                        {{Form::label('imgDisplay','Visualização: ')}}
                        <img id="imgDisplay" class="img img-responsive" src="" alt="">
                    </div>

                    {{Form::hidden('MAX_FILE_SIZE','99999999')}}
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
