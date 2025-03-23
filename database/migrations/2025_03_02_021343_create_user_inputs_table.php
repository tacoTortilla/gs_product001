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
        Schema::create('user_inputs', function (Blueprint $table) {
            $table->id();
            //memo_product1_ishi_カラム追加_20250302
            //追加開始
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('input_content_problem');
            $table->string('input_content_cost');
            $table->string('input_content_countermeasure');
            $table->string('input_content_expect');
            //追加終了
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_inputs');
    }
};
