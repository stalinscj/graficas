<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccesosUsuario extends Model
{
	protected $table = 'accesos_usuarios';

	public function usuario()
	{
		return $this->belongsTo(Usuario::class);
	}
}
