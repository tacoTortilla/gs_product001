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
        Schema::create('poc_models', function (Blueprint $table) {
            $table->id();
            $table->foreignId('key_input_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('description');
            $table->string('image_path');
            $table->string('category');
            $table->integer('cost_estimate');
            $table->string('provider');
            $table->string('success_cases');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poc_models');
    }
};
