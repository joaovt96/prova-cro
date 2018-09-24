<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $fillable = [
    	'titulo',
    	'ano',
    	'genero',
    	'diretor'
    ];

    public function usuarios()
    {
    	return $this->belongsToMany('App\Usuario');
    }
}
