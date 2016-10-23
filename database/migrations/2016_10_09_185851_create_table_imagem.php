<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableImagem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Imagens', function (Blueprint $table) {
            $table->increments('id');
             $table->string('nome');
             $table->string('descricao');
             $table->string('tamanho');
             $table->string('tipo');
             $table->binary('imagem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Imagens');
    }
}
