<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Registrom
 *
 * @property $id
 * @property $Materia
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Registrom extends Model
{
    protected $table = 'registrom'; // Nombre de la tabla personalizado

    static $rules = [
		'Materia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Materia'];



}
