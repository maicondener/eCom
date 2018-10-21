<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaTelefone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('tb_telefone')){ //Cria a tabela se não existir
            Schema::create('tb_telefone', function (Blueprint $table) {
                $table->increments('id');
                $table->string('codArea', 2);
                $table->string('telefone', 9);
                $table->integer('idFornecedor')->unsigned()->nullable(); //Referencia para fornecedores
                $table->foreign('idFornecedor')->references('id')->on('tb_fornecedor')->onDelete('cascade');
                $table->integer('idCliente')->unsigned()->nullable(); //Referencia para clientes
                $table->foreign('idCliente')->references('id')->on('tb_cliente')->onDelete('cascade');
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
        Schema::dropIfExists('tb_telefone');
    }
}
