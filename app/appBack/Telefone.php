<?php

namespace eCom\appBack;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    //Atributos
    protected $fillable = [
        'id',
        'ddd',
        'fone',
        'pessoa_id'
    ];

    protected $table = 'tbTelefone';
}
