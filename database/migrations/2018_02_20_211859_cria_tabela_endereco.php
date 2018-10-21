<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaEndereco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('tb_endereco')){ //Cria a tabela se não existir
            Schema::create('tb_endereco', function (Blueprint $table) {
                $table->increments('id');
                $table->string('endereco', 255);
                $table->string('numero', 10);
                $table->string('bairro', 180);
                $table->string('cidade', 255);
                $table->string('uf', 2);
                $table->integer('idFornecedor')->unsidned()->nullable();
                $table->foreign('idFornecedor')->references('id')->on('tb_fornecedor')->onDelete('cascade');
                $table->integer('idCliente')->unsigned()->nullable();
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
        Schema::dropIfExists('tb_endereco');
    }
}
