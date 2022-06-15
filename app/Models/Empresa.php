<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $id
 * @property $nit_empresa
 * @property $nombre_empresa
 * @property $direccion_empresa
 * @property $img_empresa
 * @property $created_at
 * @property $updated_at
 *
 * @property Recorrido[] $recorridos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{

    static $rules = [
		'nit_empresa' => 'required',
		'nombre_empresa' => 'required',
		'direccion_empresa' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nit_empresa','nombre_empresa','direccion_empresa','img_empresa'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recorridos()
    {
        return $this->hasMany('App\Models\Recorrido', 'id_empresa', 'id');
    }


}
