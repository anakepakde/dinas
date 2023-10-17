<?php

use App\Models\TugasLuar;
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
        Schema::create('input_buktis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_file');
            $table->string('keterangan');
            $table->text('upload');
            $table->foreignIdFor(\App\Models\TugasLuar::class, 'tugasluar_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('input_buktis');
    }
};
