<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Asignacion', function (Blueprint $table) {
            $table->engine = "InnoDB"; // Establece el motor de almacenamiento de la tabla en InnoDB.
            $table->bigIncrements('id'); // Crea una columna de clave primaria autoincremental de tipo BIGINT.
            $table->string('NombreEstudiante');
            $table->string('NombreProfesor');
            $table->string('Materia');
            $table->timestamps(); // Crea automáticamente columnas de registro de fecha y hora para la creación y actualización.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
