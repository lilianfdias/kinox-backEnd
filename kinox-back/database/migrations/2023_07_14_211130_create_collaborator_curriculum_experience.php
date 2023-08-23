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
            $table->uuid('id')->primary();

            $table->text('description');
            $table->string('role');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->timestamps();

            $table->uuid('curriculum_id');
            $table->foreign('curriculum_id')->references('id')->on('curriculum');

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
