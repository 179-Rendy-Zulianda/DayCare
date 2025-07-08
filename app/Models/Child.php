<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    protected $fillable = [
        'program', 'tanggal_masuk', 'nama_anak', 'nama_panggilan', 'agama_anak', 'tempat_lahir', 'tanggal_lahir', 'alamat_anak', 'telpon_rumah', 'anak_ke', 'nik_anak', 'akte_kelahiran', 'no_kk', 'foto_anak',
        'nama_ibu', 'nik_ibu', 'agama_ibu', 'pekerjaan_ibu', 'telpon_ibu', 'suku_ibu',
        'nama_ayah', 'nik_ayah', 'agama_ayah', 'pekerjaan_ayah', 'telpon_ayah', 'suku_ayah',
        'emergency_nama', 'emergency_alamat', 'emergency_telpon', 'emergency_hubungan',
        'penjemput_nama', 'penjemput_hubungan', 'penjemput_telpon',
        'perawatan_dokter', 'sedang_terapi', 'alergi_obat', 'obat_demam', 'obat_diare', 'obat_lain',
        'bab', 'bak', 'karakter_anak', 'sifat_anak',
        'permainan', 'bermain_dengan', 'acara_tv', 'tema_bacaan', 'berlangganan_buku', 'waktu_bersama', 'kegiatan_bersama',
        'alergi_makanan', 'makan_bersama', 'makan_sambil', 'makan_sendiri', 'kebiasaan_tidur_siang', 'lama_tidur_siang', 'jam_tidur_malam', 'lama_tidur_malam', 'tidur_sendiri',
        'keramas', 'sikat_gigi', 'mandi_sendiri',
        'ijin_berenang', 'ijin_minitrip', 'ijin_pertolongan', 'ijin_dijemput_oleh',
        'catatan',
        'user_id',
    ];

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
