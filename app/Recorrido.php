<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Recorrido
 *
 * @property $id
 * @property $numero_ruta
 * @property $url_recorrido
 * @property $imagen_recorrido
 * @property $id_horario
 * @property $id_empresa
 * @property $created_at
 * @property $updated_at
 *
 * @property Empresa $empresa
 * @property Horario $horario
 * @property RecorridoParada[] $recorridoParadas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Recorrido extends Model
{
    
    static $rules = [
		'numero_ruta' => 'required',
		'url_recorrido' => 'required',
		'imagen_recorrido' => 'required',
		'id_horario' => 'required',
		'id_empresa' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero_ruta','url_recorrido','imagen_recorrido','id_horario','id_empresa'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Empresa', 'id', 'id_empresa');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function horario()
    {
        return $this->hasOne('App\Horario', 'id', 'id_horario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recorridoParadas()
    {
        return $this->hasMany('App\RecorridoParada', 'id_recorrido', 'id');
    }
    

}
