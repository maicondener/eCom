<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaFoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('tb_foto')){ //Cria a tabela se não existir
            Schema::create('tb_foto', function (Blueprint $table) {
                $table->increments('id');
                $table->string('foto',255);
                $table->integer('idProduto')->unsigned();
                $table->foreign('idProduto')->references('id')->on('tb_produto')->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_foto');
    }
}
