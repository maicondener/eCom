<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaCategoria extends Migration
{
    /**
     * Cria tabela de Categorias dos produtos
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('tb_cat_produto')){ //Cria a tabela se não existir
            Schema::create('tb_cat_produto', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nome');
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
        Schema::dropIfExists('tb_cat_produto');
    }
}
