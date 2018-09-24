<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
	public function estados()
	{
		return $this->belongsTo('App\Estado');
	}

	public function enderecos()
	{
		return $this->hasMany('App\Endereco');
	}
}
