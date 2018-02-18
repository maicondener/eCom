<?php

namespace eCom\appBack;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    //Atributos
    protected $fillable = [
        'id',
        'nome'
    ];

    //Tabelas
    protected $table = 'tbPessoas';

    //Metodo buscar todos os dados relacionados - todos os telefones cadastrados para a pessoa
    public function telefone(){
        return $this->hasMany(Telefone::class, 'pessoa_id');
    }
}
