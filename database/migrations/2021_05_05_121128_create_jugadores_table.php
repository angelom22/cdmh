<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('edad')->unsigned();
            $table->timestamp('fecha_nacimiento');
            $table->string('nacionalidad');
            $table->enum('sexo', ['hombre', 'mujer']);
            $table->string('telefono');
            $table->string('correo');
            $table->string('direccion');
            $table->enum('posicion', ['Portero','Defensa','Medio Campo', 'Delantero']);
            $table->integer('partidos')->nullable();
            $table->integer('goles')->unsigned()->nullable();
            $table->enum('categoria_jugador', ['sub12', 'sub14', 'sub15-16', 'sub18-19', 'sub20-21', 'libre', 'primera']);
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('jugadores');
    }
}
