<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
    	'logradouro',
    	'numero',
    	'complemento',
    	'bairro',
    	'cep'
    ];

    public function usuarios() 
    {
    	return $this->belongsToMany('App\Usuario')->withTimestamps();;
    }

    public function cidade()
    {
        return $this->belongsTo('App\Cidade');
    }
}
