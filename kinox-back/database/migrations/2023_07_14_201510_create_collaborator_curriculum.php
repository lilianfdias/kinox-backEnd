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
        Schema::create('curriculum', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');

            $table->string('work_area');
            $table->text('description');
            $table->string('banner_image')->nullable();
            $table->boolean('revised')->default('false');
            $table->timestamps();

            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collaborator_curriculum');
    }
    
};
