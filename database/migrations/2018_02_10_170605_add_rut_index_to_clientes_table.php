<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRutIndexToClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clientes', function (Blueprint $table) {
            //Se adiciona el indice con el campo rut
            $table->index('rut', 'clientes_rut_index');

            //$table->index(['created_at', 'updated_at']); //ejemplo de un indice con varios campos
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clientes', function (Blueprint $table) {
            //Como eliminar un indice usando el nombre por default '<nombretable>_<campo1>_<campo2>_index'
            $table->dropIndex('clientes_rut_index');

            //Eliminar un indice con nombre dado en la creacion del up()
            //$table->dropIndex('Mi_indice');
        });
    }
}
