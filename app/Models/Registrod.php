<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Registrod
 *
 * @property $id
 * @property $Nombre
 * @property $Apellido
 * @property $Correo
 * @property $Telefono
 * @property $Genero
 * @property $Pais
 * @property $Departamento
 * @property $Colegio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Registrod extends Model
{
    protected $table = 'registrod'; // Nombre de la tabla personalizado

    static $rules = [
		'Nombre' => 'required',
		'Apellido' => 'required',
		'Correo' => 'required',
		'Telefono' => 'required',
		'Genero' => 'required',
		'Pais' => 'required',
		'Departamento' => 'required',
		'Colegio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Apellido','Correo','Telefono','Genero','Pais','Departamento','Colegio'];



}
