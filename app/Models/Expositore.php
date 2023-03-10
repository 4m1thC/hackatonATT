<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Expositore
 *
 * @property $id
 * @property $informacion
 * @property $created_at
 * @property $updated_at
 * @property $usuario_id
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Expositore extends Model
{
    
    static $rules = [
		'informacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['informacion','usuario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'usuario_id');
    }
    

}
