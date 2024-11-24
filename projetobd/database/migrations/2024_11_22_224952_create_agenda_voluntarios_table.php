<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaVoluntariosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agenda_voluntarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('voluntario_id');
            $table->unsignedBigInteger('atividade_id');
            $table->text('observacoes')->nullable(); 
            $table->timestamps();

            $table->foreign('voluntario_id')->references('id')->on('voluntarios')->onDelete('cascade');
            $table->foreign('atividade_id')->references('id')->on('atividades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agenda_voluntarios');
    }
};
