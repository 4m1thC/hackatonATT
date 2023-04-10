<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InscribeUsuarioEvento
 *
 * @property $id
 * @property $estado_asistencia
 * @property $usuario_id
 * @property $evento_id
 *
 * @property User $user
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class InscribeUsuarioEvento extends Model
{
    
    static $rules = [
		'estado_asistencia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estado_asistencia','usuario_id','evento_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function users()
    {
        return $this->hasMany('App\Models\User', 'id', 'usuario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function eventos()
    {
        return $this->hasMany('App\Models\Evento', 'id', 'evento_id');
    }
    

}
