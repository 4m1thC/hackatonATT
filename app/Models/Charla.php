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
 *
 * @property Evento $evento
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
    protected $fillable = ['tema','horario','archivo','evento_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function evento()
    {
        return $this->hasOne('App\Models\Evento', 'id', 'evento_id');
    }
    

}
