<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableBannerAddHeaderDescricaoMigration extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banners', function(Blueprint $table){
            $table->string('cabecalho')->nullable()->default('');
            $table->string('descricao')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banners', function(Blueprint $table){
            $table->dropColumn('cabecalho');
            $table->dropColumn('descricao');
        });
    }
}
