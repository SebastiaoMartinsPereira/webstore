<?php

namespace Store;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome','ativo',
    ];

    public function categorias(){
        return $this->belongsToMany('Store\Categoria','categoria_grupo','grupo_id','categoria_id')
                    ->withTimestamps();
    }

    public function produtos(){
        return $this->hasMany('Store\Produto','grupo_id','produto_id');
    }

}
