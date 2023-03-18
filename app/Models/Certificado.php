<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Certificado
 *
 * @property $id
 * @property $folio
 * @property $horas_academicas
 * @property $fecha_expedido
 * @property $created_at
 * @property $updated_at
 * @property $usuario_id
 * @property $charla_id
 *
 * @property Charla $charla
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Certificado extends Model
{
    
    static $rules = [
		'folio' => 'required',
		'horas_academicas' => 'required',
		'fecha_expedido' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['folio','horas_academicas','fecha_expedido','usuario_id','charla_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function charla()
    {
        return $this->hasOne('App\Models\Charla', 'id', 'charla_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'usuario_id');
    }
    

}
