<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Parada
 *
 * @property $id
 * @property $parada
 * @property $created_at
 * @property $updated_at
 *
 * @property RecorridoParada[] $recorridoParadas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Parada extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['parada'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recorridoParadas()
    {
        return $this->hasMany('App\Models\RecorridoParada', 'id_parada', 'id');
    }
    

}
