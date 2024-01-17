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
        Schema::create('table', function (Blueprint $table) {
            $table->string('option', 45)->primary();
            $table->integer('value');
        });
        print'Still need to add cb1, cb2, cb3, cb4, checkboxFolder1 and checkboxFolder2 into DB.table';
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table');
    }
};
