<?php

namespace Store;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    //
    //define o nome da tabela referenciada no banco de dados.
    //por padrão o eloquente já define que o nome da tabela é o nome da classe em minúsculo e no plural
    protected $table = 'contato';

    //define os campos que poderão ser setados de forma automática pelo eloquente.
    protected $fillable = array('nome','email','motivo_id','mensagem');

    public function tipoContato(){
         return $this->belongsTo('store\TipoContato','foreign_key');
    }
    
    //campos que não desejo que sejam preenchido de forma automática pelo eloquente usando o mass-assignment
    protected $guarded = ['id'];

    // define que os campos de ultima atualiação e datacriação serão ou não serão usados.
    public $timestamps = true;
}
