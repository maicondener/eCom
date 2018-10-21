<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('tb_cliente')){ //Se a tabela não existir
            Schema::create('tb_cliente', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nome', 255);
                $table->string('sobrenome', 255);
                $table->date('dataNasc');
                $table->string('cpf', 11);
                $table->boolean('status')->default(1);
                $table->timestamps();
            });
        } else {

        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_cliente');
    }
}
