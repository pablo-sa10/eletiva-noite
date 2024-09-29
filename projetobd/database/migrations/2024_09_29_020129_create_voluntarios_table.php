<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoluntariosTable extends Migration
{
    public function up()
    {
        Schema::create('voluntarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('idade');
            $table->string('email')->unique();
            $table->string('telefone');
            $table->string('atuacao');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('voluntarios');
    }
}