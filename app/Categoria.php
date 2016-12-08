<?php

namespace Store;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //

        protected $fillable = [
        'nome','ativo',
    ];

    public function grupos(){
        return $this->belongsToMany('Store\Grupo');
    }
}
