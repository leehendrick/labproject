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
        Schema::create('Cursos', function (Blueprint $table){
            $table->id('id_curso');
            $table->string('nome_curso', '50');
            $table->string('descricao', '100');
            $table->string('duracao', '10');
            $table->string('horario', '20');
            $table->date('data_inicio');
            $table->date('data_termino');
            $table->integer('modulos');
            $table->integer('vagas');
            $table->string('requisitos', '100');
            $table->double('preco');
        });

        Schema::create('Formandos', function (Blueprint $table){
            $table->id('id_formando');
            $table->integer('id_usuario');
            $table->integer('id_turma');
            $table->date('data_nascimento');
            $table->string('instituicao');
            $table->string('grau_academico');
            $table->string('area_formacao');
            $table->string('endereco');
            $table->string('curso_pretendido');
            $table->string('numero_bi');
        });

        Schema::create('Turmas', function (Blueprint $table){
            $table->id('id_turma');
            $table->string('nome_turma');
            $table->string('estado_turma');
            $table->integer('id_formador');
            $table->integer('id_curso');
            $table->integer('id_avaliacao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Cursos');
        Schema::dropIfExists('Formandos');
        Schema::dropIfExists('Turmas');
    }
};
