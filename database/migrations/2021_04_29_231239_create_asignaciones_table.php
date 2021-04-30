<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_materia')->nullable();
            $table->unsignedBigInteger('id_estudiante')->nullable();
            $table->string('mat_nombre');

            $table->foreign('id_materia')
            ->references('id')->on('materias')
            ->onDelete("set null");

            $table->foreign('id_estudiante')
            ->references('id')->on('estudiantes')
            ->onDelete("set null");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignaciones');
    }
}
