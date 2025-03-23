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
            $table->renameColumn('keyword_id', 'key_input_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('poc_systems', function (Blueprint $table) {
            //
            $table->renameColumn('key_input_id', 'keyword_id');
        });
    }
};
