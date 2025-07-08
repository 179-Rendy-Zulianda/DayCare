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
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            // Program & tanggal masuk
            $table->string('program');
            $table->date('tanggal_masuk');
            // Data Anak
            $table->string('nama_anak');
            $table->string('nama_panggilan')->nullable();
            $table->string('agama_anak')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('alamat_anak')->nullable();
            $table->string('telpon_rumah')->nullable();
            $table->string('anak_ke')->nullable();
            $table->string('nik_anak')->nullable();
            $table->string('akte_kelahiran')->nullable();
            $table->string('no_kk')->nullable();
            $table->string('foto_anak')->nullable();
            // Data Ibu
            $table->string('nama_ibu')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->string('agama_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('telpon_ibu')->nullable();
            $table->string('suku_ibu')->nullable();
            // Data Ayah
            $table->string('nama_ayah')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->string('agama_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('telpon_ayah')->nullable();
            $table->string('suku_ayah')->nullable();
            // Emergency
            $table->string('emergency_nama')->nullable();
            $table->string('emergency_alamat')->nullable();
            $table->string('emergency_telpon')->nullable();
            $table->string('emergency_hubungan')->nullable();
            // Penjemput
            $table->string('penjemput_nama')->nullable();
            $table->string('penjemput_hubungan')->nullable();
            $table->string('penjemput_telpon')->nullable();
            // Kesehatan
            $table->boolean('perawatan_dokter')->nullable();
            $table->boolean('sedang_terapi')->nullable();
            $table->string('alergi_obat')->nullable();
            $table->string('obat_demam')->nullable();
            $table->string('obat_diare')->nullable();
            $table->string('obat_lain')->nullable();
            // Toilet Training
            $table->string('bab')->nullable();
            $table->string('bak')->nullable();
            // Kebiasaan Anak
            $table->string('karakter_anak')->nullable();
            $table->string('sifat_anak')->nullable();
            // Kegiatan di Rumah
            $table->string('permainan')->nullable();
            $table->string('bermain_dengan')->nullable();
            $table->string('acara_tv')->nullable();
            $table->string('tema_bacaan')->nullable();
            $table->string('berlangganan_buku')->nullable();
            $table->string('waktu_bersama')->nullable();
            $table->text('kegiatan_bersama')->nullable();
            // Kegiatan Makan & Tidur
            $table->string('alergi_makanan')->nullable();
            $table->string('makan_bersama')->nullable();
            $table->string('makan_sambil')->nullable();
            $table->string('makan_sendiri')->nullable();
            $table->string('kebiasaan_tidur_siang')->nullable();
            $table->string('lama_tidur_siang')->nullable();
            $table->string('jam_tidur_malam')->nullable();
            $table->string('lama_tidur_malam')->nullable();
            $table->string('tidur_sendiri')->nullable();
            // Kebiasaan Mandi
            $table->string('keramas')->nullable();
            $table->string('sikat_gigi')->nullable();
            $table->string('mandi_sendiri')->nullable();
            // Ijin Orang Tua
            $table->boolean('ijin_berenang')->nullable();
            $table->boolean('ijin_minitrip')->nullable();
            $table->boolean('ijin_pertolongan')->nullable();
            $table->string('ijin_dijemput_oleh')->nullable();
            // Catatan
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};
