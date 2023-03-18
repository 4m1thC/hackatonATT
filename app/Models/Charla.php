<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Charla
 *
 * @property $id
 * @property $tema
 * @property $horario
 * @property $archivo
 * @property $created_at
 * @property $updated_at
 * @property $evento_id
 * @property $expositor_id
 *
 * @property Certificado[] $certificados
 * @property Evento $evento
 * @property Expositore $expositore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Charla extends Model
{
    
    static $rules = [
		'tema' => 'required',
		'horario' => 'required',
		'archivo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tema','horario','archivo','evento_id','expositor_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function certificados()
    {
        return $this->hasMany('App\Models\Certificado', 'charla_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function evento()
    {
        return $this->hasOne('App\Models\Evento', 'id', 'evento_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function expositore()
    {
        return $this->hasOne('App\Models\Expositore', 'id', 'expositor_id');
    }
    

}
