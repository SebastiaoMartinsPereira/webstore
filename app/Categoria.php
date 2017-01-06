<?php

namespace Store;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
        protected $fillable = [
        'nome','ativo',
    ];

    public function grupos(){
        return $this->belongsToMany('Store\Grupo','categoria_grupo','categoria_id','grupo_id');
    }
}
