<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = 'usuarios';
    
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function accesos()
    {
        return $this->hasMany(AccesosUsuario::class);
    }

    public function hasAccesoParticular($ruta, $metodo)
    {
        $acceso = AccesosUsuario::where('usuario_id', $this->id)
            ->where('ruta', $ruta)
            ->where('metodo', $metodo)
            ->count();
        
        return $acceso;
    }

    public function hasAccesoGrupal($ruta, $metodo)
    {
        return 0;
    }
}
