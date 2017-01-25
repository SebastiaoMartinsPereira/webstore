<?php

namespace Store;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
         /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome','destaque','novidade','imagem','link','descricao'
    ];

    public function categorias(){
        return $this->belongsToMany('Store\Categoria','user_id','categoria_id')
                    ->withTimestamps();
    }

    public function grupos(){
        return $this->belongsToMany('Store\Grupo','user_id','grupo_id')
                    ->withTimestamps();
    }
}



