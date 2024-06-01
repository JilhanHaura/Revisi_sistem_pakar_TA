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
        Schema::create('rules', function (Blueprint $table) {
            $table->char('rule',4)->primary();
            $table->char('gejala_id')->foreignId();
            $table->char('pernyataan_id')->foreignId();
            $table->double('nilai_mb');
            $table->double('nilai_md');
            $table->double('nilai_cf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rules');
    }
};