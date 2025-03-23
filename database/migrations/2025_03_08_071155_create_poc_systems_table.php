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
        Schema::create('poc_systems', function (Blueprint $table) {
            $table->id();
            //memo_product1_ishi_カラム追加_20250308
            //追加開始
            $table->foreignId('keyword_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('description');
            $table->string('image_path');
            $table->string('category');
            $table->integer('cost_estimate');
            $table->string('provider');
            $table->string('success_cases');
            //追加終了
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poc_systems');
    }
};
