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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->unique();
            $table->string('descricao');
            $table->date('data_inicio');
            $table->date('data_termino');
            $table->integer('vagas');
            $table->string('local');
            $table->double('preco');
            $table->integer('modulos');
            $table->string('nota');
            $table->string('requisitos');
            $table->unsignedBigInteger('duracao');
            $table->unsignedBigInteger('horario');
            $table->unsignedBigInteger('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
