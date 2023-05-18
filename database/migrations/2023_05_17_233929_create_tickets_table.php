<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id()->comment("Identificador unico del ticket");
            $table->string("codigo_ticket",10)->comment("Codigo de ticket que se entrego al usuario o cliente de la entidad");
            $table->dateTime("fecha")->comment("Campo que almacena la fecha y hora en que se emitio el ticket");
            $table->boolean("estado")->comment("Campo que almacena la informacion cuando el ticket ha sido atendido");
            $table->unsignedBigInteger("id_prioridad");
            $table->foreign('id_prioridad')
                  ->references('id')
                  ->on('prioridads')
                  ->onUpdate("cascade")
                  ->onDelete("cascade");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
