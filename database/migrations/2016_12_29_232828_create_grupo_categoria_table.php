<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('categoria_grupo', function(Blueprint $table)
    {
        $table->integer('categoria_id')->unsigned()->nullable();
        $table->foreign('categoria_id')->references('id')
                ->on('categorias')->onDelete('cascade');

        $table->integer('grupo_id')->unsigned()->nullable();
        $table->foreign('grupo_id')->references('id')
                ->on('grupos')->onDelete('cascade');
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
        Schema::dropIfExists('categoria_grupo');
    }
}
