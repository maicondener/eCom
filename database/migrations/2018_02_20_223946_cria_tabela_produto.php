<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('tb_produto')){ //Cria a tabela se não existir
            Schema::create('tb_produto', function (Blueprint $table) {
                $table->increments('id');
                $table->string('sku', 20);
                $table->string('nome', 255);
                $table->text('descricao');
                $table->integer('idCategoria')->unsigned();
                $table->foreign('idCategoria')->references('id')->on('tb_categoria')->onDelete('cascade');
                $table->integer('quantidade');
                $table->double('precoCusto', 12, 2); //Ex.: 0.000.000.000,00
                $table->double('precoVenda', 12, 2);
                $table->boolean('status')->default(1);
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
        Schema::dropIfExists('tb_produto');
    }
}
