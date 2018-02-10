<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRutIndexToEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empleados', function (Blueprint $table) {
            //Se adiciona el indice con el campo rut
            $table->index('rut');
            //$table->index('updated_at', 'Mi_indice'); 

            //Ejemplo de un indice con varios campos
            //$table->index(['created_at', 'updated_at']); 
            //Ejemplo de un indice con varios campos y un nombre del indice proporcionado por nosotros
            //$table->index(['created_at', 'updated_at'], 'nuestro_indice'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empleados', function (Blueprint $table) {
            //Como eliminar un indice usando el nombre por default '<nombretable>_<campo1>_<campo2>_index'
            $table->dropIndex('empleados_rut_index');

            //Eliminar un indice con nombre dado en la creacion del up()
            //$table->dropIndex('Mi_indice');
        });
    }
}
