<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('IdEmpleados');
            $table->string('Nombre', 55);
            $table->string('Apellidos',55);
            $table->integer('FkEmpresa')->unsigned();
            $table->string('Email', 55);
            $table->char('Telefon',16);
            $table->foreign('FkEmpresa')->references('IdEmpresa')->on('empresas');
            $table->timestamps();
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
