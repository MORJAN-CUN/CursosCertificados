<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDownloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('downloads', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_estudiante');
            $table->string('tipo_participante');
            $table->string('email');
            $table->string('tipo_documento');
            $table->string('numero_documento');
            $table->string('nombre_producto');
            $table->date('fecha_realización');
            $table->date('fecha_descarga');
            $table->string('duración');
            $table->string('modalidad');
            $table->string('ciudad_expedición');
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
        Schema::dropIfExists('downloads');
    }
}
