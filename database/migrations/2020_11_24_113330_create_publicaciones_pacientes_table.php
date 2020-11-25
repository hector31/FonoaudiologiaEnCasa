<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacionesPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones_pacientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paciente_id')->constrained('users')->onDelete('cascade');
            $table->string('title');
            $table->text('post_image')->nullable();
            $table->text('body');
            $table->text('description');
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
        Schema::dropIfExists('publicaciones_pacientes');
    }
}
