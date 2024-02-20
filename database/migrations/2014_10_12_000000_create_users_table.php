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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('correo')->unique();
            $table->string('name')->unique();
            $table->string('password');
            $table->timestamps();
        });
        Schema::create('maestros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->timestamps();
        });
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();
            $table->float('calificacion');
            $table->timestamps();
        });
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->id();
            $table->string('asignatura');
            $table->unsignedBigInteger('id_maestro');
            $table->unsignedBigInteger('id_calificacion');
            $table->foreign('id_maestro')->references('id')->on('maestros');
            $table->foreign('id_calificacion')->references('id')->on('calificaciones');
            $table->timestamps();
        });
        Schema::create('boletas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_asignatura');
            $table->foreign('id_asignatura')->references('id')->on('asignaturas');
            $table->timestamps();
        });
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_boleta');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->foreign('id_boleta')->references('id')->on('boletas');
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
        Schema::dropIfExists('usuarios');
        Schema::dropIfExists('maestros');
        Schema::dropIfExists('calificaciones');
        Schema::dropIfExists('asignaturas');
        Schema::dropIfExists('boletas');
        Schema::dropIfExists('alumnos');
    }
};
