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
        Schema::create('tugas_luars', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Anggota::class, 'anggota_id');
            $table->string('kategori_tugas');
            $table->string('tempat_tugas');
            $table->date('tanggal_terima_tugas');
            $table->date('tanggal_mulai_tugas');
            $table->date('tanggal_selesai_tugas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas_luars');
    }
};
