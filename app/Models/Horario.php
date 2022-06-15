<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Horario
 *
 * @property $id
 *
 * @property $nombre_horario
 * @property $hora_inicio_semana
 * @property $hora_final_semana
 * @property $hora_inicio_festivo
 * @property $hora_final_festivo
 * @property $created_at
 * @property $updated_at
 *
 * @property Recorrido[] $recorridos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Horario extends Model
{

    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_horario','hora_inicio_semana','hora_final_semana','hora_inicio_festivo','hora_final_festivo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recorridos()
    {
        return $this->hasMany('App\Models\Recorrido', 'id_horario', 'id');
    }


}
