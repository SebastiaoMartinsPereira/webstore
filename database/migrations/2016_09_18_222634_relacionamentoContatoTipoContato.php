<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelacionamentoContatoTipoContato extends Migration
{
       /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contato',function(Blueprint $table){
            $table->smallInteger('tipocontato_id')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contato',function(Blueprint $table){
            $table->dropColumn('tipocontato_id');
        });
    }
}
