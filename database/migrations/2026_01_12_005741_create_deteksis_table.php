<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('deteksi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tanaman');
            $table->string('nama_penyakit');
            $table->text('image_path');
            $table->enum('status', ['Ringan', 'Sedang', 'Berat']);
            $table->text('jadwal_perawatan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('deteksi');
    }
};
