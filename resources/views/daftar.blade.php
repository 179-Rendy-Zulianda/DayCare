@extends('layouts.app')
@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white/90 rounded-2xl shadow-2xl mt-8 mb-8">
<div class="mb-4 text-right">
        <a href="{{ url()->previous() }}" 
           style="background: linear-gradient(to right, #f97316, #ec4899) !important; color: #fff !important; font-weight: bold !important; box-shadow: 0 4px 14px 0 rgba(236,72,153,0.15);"
           class="px-6 py-2 rounded-full shadow transition-all duration-300">
            Kembali
        </a>
    </div>
    <h2 class="text-2xl font-bold mb-6 text-center bg-gradient-to-r from-orange-400 to-pink-500 bg-clip-text text-transparent">Formulir Pendaftaran Anak</h2>
    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">{{ session('success') }}</div>
    @endif
    <form method="POST" action="{{ route('daftar') }}" enctype="multipart/form-data" class="space-y-6">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="font-semibold">Program</label>
                <select name="program" class="w-full rounded border border-orange-300 px-3 py-2 mt-1">
                    <option value="">Pilih Program</option>
                    <option value="Full Day">Full Day</option>
                    <option value="Play Group">Play Group</option>
                    <option value="PGFD">PGFD</option>
                </select>
            </div>
            <div>
                <label class="font-semibold">Tanggal Masuk</label>
                <input type="date" name="tanggal_masuk" class="w-full rounded border border-orange-300 px-3 py-2 mt-1">
            </div>
        </div>
        <h3 class="font-bold text-lg mt-6 mb-2 text-orange-600">Data Anak</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div><label>Nama Anak</label><input type="text" name="nama_anak" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Nama Panggilan</label><input type="text" name="nama_panggilan" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Agama</label><input type="text" name="agama_anak" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Tempat Lahir</label><input type="text" name="tempat_lahir" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Tanggal Lahir</label><input type="date" name="tanggal_lahir" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Alamat</label><input type="text" name="alamat_anak" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Telpon Rumah</label><input type="text" name="telpon_rumah" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Anak ke-berapa</label><input type="text" name="anak_ke" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>No. NIK</label><input type="text" name="nik_anak" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>No. Akte Kelahiran</label><input type="text" name="akte_kelahiran" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>No. KK</label><input type="text" name="no_kk" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Foto Anak</label><input type="file" name="foto_anak" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
        </div>
        <h3 class="font-bold text-lg mt-6 mb-2 text-orange-600">Data Orang Tua</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div><label>Nama Ibu</label><input type="text" name="nama_ibu" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>No. NIK Ibu</label><input type="text" name="nik_ibu" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Agama Ibu</label><input type="text" name="agama_ibu" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Pekerjaan Ibu</label><input type="text" name="pekerjaan_ibu" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>No. Telpon/HP Ibu</label><input type="text" name="telpon_ibu" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Suku Bangsa Ibu</label><input type="text" name="suku_ibu" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Nama Ayah</label><input type="text" name="nama_ayah" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>No. NIK Ayah</label><input type="text" name="nik_ayah" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Agama Ayah</label><input type="text" name="agama_ayah" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Pekerjaan Ayah</label><input type="text" name="pekerjaan_ayah" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>No. Telpon/HP Ayah</label><input type="text" name="telpon_ayah" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Suku Bangsa Ayah</label><input type="text" name="suku_ayah" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
        </div>
        <h3 class="font-bold text-lg mt-6 mb-2 text-orange-600">Kontak Darurat</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div><label>Nama</label><input type="text" name="emergency_nama" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Alamat</label><input type="text" name="emergency_alamat" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>No. Telpon/HP</label><input type="text" name="emergency_telpon" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Hubungan dengan Orang Tua</label><input type="text" name="emergency_hubungan" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
        </div>
        <h3 class="font-bold text-lg mt-6 mb-2 text-orange-600">Penjemput Anak</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div><label>Nama</label><input type="text" name="penjemput_nama" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Hubungan</label><input type="text" name="penjemput_hubungan" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>No. Telpon/HP</label><input type="text" name="penjemput_telpon" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
        </div>
        <h3 class="font-bold text-lg mt-6 mb-2 text-orange-600">Kesehatan & Kebiasaan</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div><label>Dalam Perawatan Dokter</label><select name="perawatan_dokter" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"><option value="">Pilih</option><option value="1">Ya</option><option value="0">Tidak</option></select></div>
            <div><label>Sedang Menjalani Terapi</label><select name="sedang_terapi" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"><option value="">Pilih</option><option value="1">Ya</option><option value="0">Tidak</option></select></div>
            <div><label>Alergi Obat</label><input type="text" name="alergi_obat" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Obat Demam/Panas</label><input type="text" name="obat_demam" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Obat Diare/Sakit Perut</label><input type="text" name="obat_diare" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Obat Lain-lain</label><input type="text" name="obat_lain" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>BAB</label><input type="text" name="bab" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>BAK</label><input type="text" name="bak" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Karakter Anak</label><input type="text" name="karakter_anak" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Sifat Anak</label><input type="text" name="sifat_anak" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
        </div>
        <h3 class="font-bold text-lg mt-6 mb-2 text-orange-600">Kegiatan di Rumah & Makan Tidur</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div><label>Permainan yang Biasa Dilakukan</label><input type="text" name="permainan" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Bermain Dengan</label><input type="text" name="bermain_dengan" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Acara TV yang Ditonton</label><input type="text" name="acara_tv" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Tema Bacaan Favorit</label><input type="text" name="tema_bacaan" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Berlangganan Buku/Majalah</label><input type="text" name="berlangganan_buku" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Waktu Bersama Orang Tua</label><input type="text" name="waktu_bersama" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div class="md:col-span-2"><label>Kegiatan Bersama Anak</label><textarea name="kegiatan_bersama" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></textarea></div>
            <div><label>Alergi Makanan</label><input type="text" name="alergi_makanan" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Makan Bersama/Sendiri</label><input type="text" name="makan_bersama" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Makan Sambil Duduk/Berjalan</label><input type="text" name="makan_sambil" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Sudah Bisa Makan Sendiri</label><input type="text" name="makan_sendiri" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Kebiasaan Tidur Siang</label><input type="text" name="kebiasaan_tidur_siang" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Lama Tidur Siang</label><input type="text" name="lama_tidur_siang" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Jam Tidur Malam</label><input type="text" name="jam_tidur_malam" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Lama Tidur Malam</label><input type="text" name="lama_tidur_malam" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Tidur Sendiri/Ditemani</label><input type="text" name="tidur_sendiri" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
        </div>
        <h3 class="font-bold text-lg mt-6 mb-2 text-orange-600">Kebiasaan Mandi</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div><label>Keramas (kali/hari)</label><input type="text" name="keramas" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Sikat Gigi (kali/hari)</label><input type="text" name="sikat_gigi" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
            <div><label>Mandi Sendiri/Dimandikan</label><input type="text" name="mandi_sendiri" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
        </div>
        <h3 class="font-bold text-lg mt-6 mb-2 text-orange-600">Ijin Orang Tua</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div><label><input type="checkbox" name="ijin_berenang" value="1"> Ikut aktivitas berenang</label></div>
            <div><label><input type="checkbox" name="ijin_minitrip" value="1"> Ikut program minitrip</label></div>
            <div><label><input type="checkbox" name="ijin_pertolongan" value="1"> Mendapatkan pertolongan pertama</label></div>
            <div><label>Dijemput oleh selain orang tua</label><input type="text" name="ijin_dijemput_oleh" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></div>
        </div>
        <div class="mt-6">
            <label class="font-semibold">Catatan/Note</label>
            <textarea name="catatan" class="w-full rounded border border-orange-300 px-3 py-2 mt-1"></textarea>
        </div>
        <div class="mt-8 text-center">
            <button type="submit"
                style="background: linear-gradient(to right, #f97316, #ec4899) !important; color: #fff !important; font-weight: bold !important; box-shadow: 0 4px 14px 0 rgba(236,72,153,0.15);"
                class="w-full py-2 rounded-full transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:ring-opacity-50">
                Daftarkan Anak
            </button>
        </div>
    </form>
</div>
@endsection 