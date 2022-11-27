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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('chip', 255);
            $table->string('foto', 255);
            $table->string('pais_origem', 255);
            $table->string('data_nascimento', 255);
            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->unsignedBigInteger('raca_id');
            $table->foreign('raca_id')->references('id')->on('racas');
            $table->unsignedBigInteger('pai')->nullable();
            $table->foreign('pai')->references('id')->on('animals');
            $table->unsignedBigInteger('mae')->nullable();
            $table->foreign('mae')->references('id')->on('animals');
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
        Schema::dropIfExists('animals');
    }
};
