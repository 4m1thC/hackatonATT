<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evento
 *
 * @property $id
 * @property $nombre_evento
 * @property $descripcion
 * @property $tipo_evento
 * @property $nro_cupos
 * @property $fecha
 * @property $portada
 * @property $created_at
 * @property $updated_at
 *
 * @property Ambiente[] $ambientes
 * @property Charla[] $charlas
 * @property Materiale[] $materiales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evento extends Model
{
    
    static $rules = [
		'nombre_evento' => 'required',
		'descripcion' => 'required',
		'tipo_evento' => 'required',
		'nro_cupos' => 'required',
		'fecha' => 'required',
		'portada' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_evento','descripcion','tipo_evento','nro_cupos','fecha','portada'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ambientes()
    {
        return $this->hasMany('App\Models\Ambiente', 'evento_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function charlas()
    {
        return $this->hasMany('App\Models\Charla', 'evento_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materiales()
    {
        return $this->hasMany('App\Models\Materiale', 'evento_id', 'id');
    }
    
    // public function users()
    // {
    //     return $this->belongsToMany(User::class, 'inscribe');
    // }
    

}
