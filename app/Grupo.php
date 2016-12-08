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
        return $this->belongsToMany('Store\Categoria','categorias_grupos','grupo_id','categoria_id')
                    ->withTimestamps();
    }
}
