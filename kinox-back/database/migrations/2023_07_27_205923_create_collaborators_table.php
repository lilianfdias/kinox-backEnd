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
        Schema::create('collaborators', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');

            $table->string('name');
            $table->enum('role',['Direção','Ator/Atriz','Produção','Produção executiva','Assistente de direção','Design de produção','Direção de arte','Mixagem de som','Direção de fotografia', 'Operador de câmera','Assistente de câmera','Técnico de imagem digital','Iluminador','Maquiagem','hair stylist','Figurinista','Operador de som','Roteirista']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collaborators');
    }
};
