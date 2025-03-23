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
        Schema::table('poc_systems', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('poc_systems', function (Blueprint $table) {
            //
            // 旧外部キーを削除
            $table->dropForeign(['keyword_id']);
            
            // カラム名を変更
            $table->renameColumn('keyword_id', 'key_input_id');

            // 新しい外部キーを設定
            $table->foreign('key_input_id')->references('id')->on('keywords')->onDelete('cascade');
        });
    }
};
