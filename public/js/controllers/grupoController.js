var GrupoController = function(){

    this.Id = $('#id');
    this.Nome = $('#nome');
    this.FrmCabecalho = $('#frmCabecalho');
};

GrupoController.prototype.update = function(event,id,elemento){
    
    try {
            
        this.Id.val(id);
        this.FrmCabecalho.html('Editar Grupo <strong class="alert-info">' + $(elemento).parents('tr').find('[data-value=nome]').html() + '</strong>');
        this.Nome.val($(elemento).parents('tr').find('[data-value=nome]').html());
    } catch (error) {
        console.log(error);
    };
};

GrupoController.prototype.novo = function(){
    try {
        this.ImgVisualizacao.hide();
        this.FrmCabecalho.html('Novo Grupo');
        this.limparFrm();
    } catch (error) {
        console.log(error);
    }
}

GrupoController.prototype.limparFrm = function(){
    try {
        this.Id.val('');
        this.Nome.val('');
    } catch (error) {
        throw error;
    }
}
