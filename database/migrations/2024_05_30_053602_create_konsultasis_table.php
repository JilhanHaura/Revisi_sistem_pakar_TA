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
        Schema::create('konsultasis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('user_id')->foreignId();
            $table->text('nama')->foreignId();
            $table->date('tanggal_konsultasi');
            $table->text('hasil_skrinning');
            $table->text('cf_max');
            $table->text('pertanyaan_terpilih');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsultasis');
    }
};