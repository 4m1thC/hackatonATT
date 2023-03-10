<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ambiente
 *
 * @property $id
 * @property $nombre_ambiente
 * @property $direccion
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 * @property $evento_id
 *
 * @property Evento $evento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ambiente extends Model
{
    
    static $rules = [
		'nombre_ambiente' => 'required',
		'direccion' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_ambiente','direccion','descripcion','evento_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function evento()
    {
        return $this->hasOne('App\Models\Evento', 'id', 'evento_id');
    }
    

}
