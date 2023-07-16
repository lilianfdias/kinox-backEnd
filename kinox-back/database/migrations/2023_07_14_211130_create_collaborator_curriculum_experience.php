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
        Schema::create('curriculum_experience', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');

            $table->string('role');
            $table->timestamp('start-date')->nullable();
            $table->timestamp('end-date')->nullable();
            $table->timestamps();

            $table->uuid('experience-id');
            $table->foreign('experience-id')->references('id')->on('curriculum');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collaborator_curriculum_experience');
    }
};
