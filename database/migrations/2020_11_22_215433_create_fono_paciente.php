<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFonoPaciente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fono_paciente', function (Blueprint $table) {
            $table->primary(['fono_id','paciente_id']);
            $table->foreignId('fono_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('paciente_id')->constrained('users')->onDelete('cascade');
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
        Schema::dropIfExists('fono_paciente');
    }
}
