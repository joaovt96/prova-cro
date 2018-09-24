<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
    	'nome',
    	'data_nasc',
    	'sexo',
    	'titulacao',
    	'cpf',
    	'rg'
    ];

    public function enderecos()
    {
    	return $this->belongsToMany('App\Endereco')->withTimestamps();
    }

    public function filmes()
    {
    	return $this->belongsToMany('App\Filme')->withTimestamps();
    }
}
