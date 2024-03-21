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
        Schema::create('inscricao_empresarial', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('contato');
            $table->string('cargo', 20);
            $table->string('atividade');
            $table->unsignedBigInteger('empresa');
            $table->unsignedBigInteger('curso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscricao_empresarial');
    }
};
