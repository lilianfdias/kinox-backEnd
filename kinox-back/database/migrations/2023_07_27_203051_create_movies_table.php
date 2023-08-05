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
        Schema::create('movies', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            
            $table->string('title')->unique();
            $table->string('description');
            $table->enum('genre',['action','comedy','drama','fantasy','horror','mystery','romance','thriller', 'western','romantic comedy','documentary','psycological thriller','animation']);

            $table->string('url');

            $table->string('ano')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
