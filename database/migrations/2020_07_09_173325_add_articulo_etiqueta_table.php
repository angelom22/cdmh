<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddArticuloEtiquetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // Articulos & Etiqeutas = articulo & etiqueta = articulo_etiqueta
        Schema::create('articulo_etiqueta',  function (Blueprint $table) {
            $table->id();
            $table->integer('articulo_id')->unsigned();
            $table->integer('etiqueta_id')->unsigned();

            $table->foreign('articulo_id')->references('id')->on('articulos')->onDelete('cascade');
            $table->foreign('etiqueta_id')->references('id')->on('etiquetas')->onDelete('cascade');

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
        Schema::dropIfExists('articulo_etiqueta');
    }
}
