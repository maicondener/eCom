<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaFornecedor extends Migration
{
    /**
     * Cria tabela de fornecedores
     * atualizações: 11/03/2018 -> add campo status
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('tb_fornecedor')){ //Se a tabela não existir
            Schema::create('tb_fornecedor', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nome', 255);
                $table->string('cpf_cnpj', 14);
                $table->boolean('status')->default(1);
                $table->timestamps();
            });
        }
    }

    /**
     * Desfaz as alterações feitas acima
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_fornecedor');
    }
}
