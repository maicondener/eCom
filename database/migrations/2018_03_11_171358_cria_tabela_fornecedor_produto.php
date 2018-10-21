<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaFornecedorProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('tb_fornecedor_produto')){ //Cria a tabela se não existir
            Schema::create('tb_fornecedor_produto', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('idFornecedor')->unsigned();
                $table->foreign('idFornecedor')->references('id')->on('tb_fornecedor')->onDelete('cascade');
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
        Schema::dropIfExists('tb_fornecedor_produto');
    }
}
