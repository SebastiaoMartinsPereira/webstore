var BannerController = function(){

    this.Id = $('#id');
    this.Nome = $('#nome');
    this.Link = $('#link');
    this.Cabecalho = $('#cabecalho');
    this.Descricao = $('#descricao');
    this.Imagem = $('.fuImagem');
    this.Path = $('#path');
    this.FrmCabecalho = $('#frmCabecalho');
    this.ImgDisplay = $('#imgDisplay');
    this.ImgVisualizacao = $('#imgVisualizacao');
};

BannerController.prototype.editar = function(event,id,elemento){
    
    try {
            
        this.Id.val(id);
        this.FrmCabecalho.html('Editar Banner <strong class="alert-info">' + $(elemento).parents('tr').find('[data-value=nome]').html() + '</strong>');
        this.Nome.val($(elemento).parents('tr').find('[data-value=nome]').html());
        this.Link.val($(elemento).parents('tr').find('[data-value=link] a').html());
        this.Cabecalho.val($(elemento).parents('tr').find('[data-value=cabecalho]').html());
        this.Descricao.val($(elemento).parents('tr').find('[data-value=descricao]').html());
        this.ImgDisplay.attr('src',"../"+$(elemento).parents('tr').find('[data-value=path]').html());
        this.ImgDisplay.attr('alt',$(elemento).parents('tr').find('[data-value=nome]').html());
        this.Path.val($(elemento).parents('tr').find('[data-value=path]').html());
        this.Imagem.hide();
        this.ImgVisualizacao.show();

    } catch (error) {
        console.log(error);
    };
};

BannerController.prototype.novo = function(){
    try {
        
        this.ImgVisualizacao.hide();
        this.FrmCabecalho.html('Novo Banner');
        this.limparFrm();
    } catch (error) {
        console.log(error);
    }
}
BannerController.prototype.limparFrm = function(){
    try {
        this.Id.val('');
        this.Nome.val('')
        this.Link.val('')
        this.Cabecalho.val('');
        this.Descricao.val('');
        this.Imagem.val('');
        this.Path.val('');
        this.Imagem.show();
        this.ImgDisplay.attr('src','');
        this.ImgDisplay.attr('alt','');
    } catch (error) {
        throw error;
    }
}
