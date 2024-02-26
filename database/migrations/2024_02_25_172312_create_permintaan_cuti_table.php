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
        Schema::create('permintaan_cuti', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_karyawan')->constrained('karyawan');
            $table->string('jenis_cuti');
            $table->date('tanggal_awal_cuti');
            $table->date('tanggal_akhir_cuti');
            $table->enum('status', ['disetujui', 'dibatalkan']);
            $table->string('disetujui_oleh')->nullable();
            $table->string('alasan_cuti');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permintaan_cuti');
    }
};
