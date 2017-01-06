class CategoriaController {

    constructor(id,nome,grupos,frmCabecalho){
        this.id = id;
        this.nome = nome;
        this.grupo = grupos;
        this.frmCabecalho = frmCabecalho;
    }

    get id(){return this._id;}
    set id(val){this._id = val;}
     
    get nome(){return this._nome;}
    set nome(val){this._nome =val;}
        
    get grupo(){return this._grupo;}
    set grupo(val){this._grupo = val;}

    get frmCabecalho(){return this._frmCabecalho;}
    set frmCabecalho(val){this._frmCabecalho = val;}
     
    
    //abre form de adicionar categoria
    novo(){

        try {
            this.frmCabecalho.html('Nova Categoria');
            this._limparFrm();
        } catch (error) {
            console.log(error);
        }
    
    }

    update(event,id,elemento){
    
        try {
            debugger;  
            let categoria_nome = $(elemento).parents('tr').find('[data-value=categoria_nome]').html().trim();
            let grupo_id = $(elemento).parents('tr').find('[data-value=grupo_id]').html().trim();
            this.id.val(id);
            this.frmCabecalho.html('Editar Categoria <strong class="alert-info">' + categoria_nome + '</strong>');
            this.nome.val(categoria_nome);
            this.grupo.val(grupo_id);
        } catch (error) {
            console.log(error);
        }
    }
  
    _limparFrm(){
        $(this.nome).html('');        
        $(this.nome).val('');

    };


};

 