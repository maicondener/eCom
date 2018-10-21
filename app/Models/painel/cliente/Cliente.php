<?php

namespace eCom\Models\painel\cliente;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $table = 'tb_cliente';

    //Model para clientes
    protected $fillable = [
        'nome',
        'sobrenome',
        'dtNasc',
        'cpf',
        'status'
    ];

}
