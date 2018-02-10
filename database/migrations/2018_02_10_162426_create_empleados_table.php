<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('rut', 10);
            $table->string('nombre', 20);
            $table->string('apellido', 20);
            $table->string('telefono', 15);
            $table->string('celular', 15);
            $table->string('direccion', 200);
            $table->string('email', 50);
            $table->date('fecha_inicio');
            $table->date('fecha_salida');
            $table->integer('tipoEmpleado_id') ;
            $table->integer('cargo_id') ;
            $table->integer('salario_id') ;
            $table->integer('comisiones_id') ;
            $table->integer('bonos_id') ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
