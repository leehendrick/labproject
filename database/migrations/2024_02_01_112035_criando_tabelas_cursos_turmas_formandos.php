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
        Schema::create('cursos', function (Blueprint $table){
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

        Schema::create('formandos', function (Blueprint $table){
            $table->id('id_formando');
            $table->bigInteger('id_usuario');
            $table->bigInteger('id_turma');
            $table->date('data_nascimento');
            $table->string('instituicao');
            $table->string('grau_academico');
            $table->string('area_formacao');
            $table->string('endereco');
            $table->string('curso_pretendido');
            $table->string('numero_bi');
        });

        Schema::create('turmas', function (Blueprint $table){
            $table->id('id_turma');
            $table->string('nome_turma');
            $table->string('estado_turma');
            $table->bigInteger('id_formador');
            $table->bigInteger('id_curso');
            $table->bigInteger('id_avaliacao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
        Schema::dropIfExists('formandos');
        Schema::dropIfExists('turmas');
    }
};
