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
}
