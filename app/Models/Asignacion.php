<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asignacion
 *
 * @property $id
 * @property $NombreEstudiante
 * @property $NombreProfesor
 * @property $Materia
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asignacion extends Model
{
    protected $table = 'asignacion'; // Nombre de la tabla personalizado
    
    static $rules = [
        'NombreEstudiante' => 'required',
        'NombreProfesor' => 'required',
        'Materia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NombreEstudiante', 'NombreProfesor', 'Materia'];
}
