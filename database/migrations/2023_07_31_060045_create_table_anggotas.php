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
        Schema::create('table_anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('kode_anggota',9);
            $table->string('nama_anggota',100);
            $table->string('jk_anggota',1);
            $table->string('jurusan_anggota',40);
            $table->string('no_telp_anggota',13);
            $table->string('alamat_anggota',13);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_anggotas');
    }
};
