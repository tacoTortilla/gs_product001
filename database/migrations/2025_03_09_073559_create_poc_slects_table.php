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
        Schema::create('poc_slects', function (Blueprint $table) {
            $table->id();
            //memo_product1_ishi_カラム追加_20250308
            //追加開始
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('key_input_id')->constrained()->cascadeOnDelete();
            $table->foreignId('poc_model_id')->constrained()->cascadeOnDelete();
            //追加終了
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poc_slects');
    }
};
