<?php

namespace Store;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome','cabecalho','descricao','path','link','ativo',
    ];
 
}
