<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RecorridoParada
 *
 * @property $id
 * @property $id_parada
 * @property $id_recorrido
 * @property $created_at
 * @property $updated_at
 *
 * @property Parada $parada
 * @property Recorrido $recorrido
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RecorridoParada extends Model
{
    
    static $rules = [
		'id_parada' => 'required',
		'id_recorrido' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_parada','id_recorrido'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function parada()
    {
        return $this->hasOne('App\Models\Parada', 'id', 'id_parada');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function recorrido()
    {
        return $this->hasOne('App\Models\Recorrido', 'id', 'id_recorrido');
    }
    

}
