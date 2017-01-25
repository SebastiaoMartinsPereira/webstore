<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdutoAddValorCustoVendaMigrattion extends Migration
{
   
    public function up()
    {
        Schema::table('produtos', function(Blueprint $table){
            $table->double('custo',18,4);
            $table->double('venda',18,4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function(Blueprint $table){
            $table->dropColumn('custo','venda');
        });
    }
     
}
