<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegistroA
 *
 * @property $id
 * @property $Nombre
 * @property $Apellido
 * @property $Correo
 * @property $Telefono
 * @property $Genero
 * @property $Pais
 * @property $Departamento
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RegistroA extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Apellido' => 'required',
		'Correo' => 'required',
		'Telefono' => 'required',
		'Genero' => 'required',
		'Pais' => 'required',
		'Departamento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Apellido','Correo','Telefono','Genero','Pais','Departamento'];



}
