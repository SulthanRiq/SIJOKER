<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaporan extends Model
{
    use HasFactory;

    protected $fillable = [
        // A. KEADAAN PERUSAHAAN
        'NamaPengelola',
        'namaPerusahaan',
        'alamatPerusahaan',
        'noTelp',
        'kodePos',
        'jenisUsaha',
        'NamaPemilikPerusahaan',
        'AlamatPemilikPerusahaan',
        'PendirianPerusahaan',
        'PerpindahanPerusahaan',
        'statusPerusahaan',
        'Indonesia',
        'LuarIndonesia',
        'statusKepemilikan',
        'statusPermodalan',
        'Pemodalan',
        'AsalNegara',
        // B. KEADAAN KETENAGAKERJAAN
        'waktuKerjaPria',
        'waktuKerjaWanita',
        'JumlahTenagaKerja',
        'PengupahanTertinggi',
        'PengupahanTerendah',
        'FasillitasKeselamatan',
        'FasilitasKesejahteraan',
        // BPJS Ketenagakerjaan
        'ProgramJaminanKesehatan',
        'ProgramJKK',
        'ProgramJHT',
        'ProgramJKM',
        'ProgramJP',
        // Perangkat Hubungan Industrial
        'PerangkatHub',
        'PerangkatHubMemilikiTenagaKerja',
        'JumlahPenerimaan',
        'JumlahBerhenti',
        'ProgramPelatihan',
        'ProgramPemagangan',
        // D. TANGGAL LAPOR DAN KEWAJIBAN MELAPOR KEMBALI
        'NomorPelaporan',
        'TanggalLapor',
        'KewajibanLaporKembali',
    ];

    protected $casts = [
        'statusKepemilikan'       => 'array',
        'statusPermodalan'        => 'array',
        'waktuKerjaPria'          => 'array',
        'FasillitasKeselamatan'   => 'array',
        'FasilitasKesejahteraan'  => 'array',
    ];
}
