<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelaporan;

class PelaporanController extends Controller
{
    public function index() {
        return view('pelaporan');
    }
    // Menampilkan halaman form pelaporan
    public function create()
    {
        return view('pelaporan-admin');
    }

    // Menangani proses penyimpanan data pelaporan
    
    public function store(Request $request)
    {
        //dd($request->all());
        // Lakukan validasi terhadap data yang dikirim dari form
        $validated = $request->validate([
            // A. KEADAAN PERUSAHAAN
            'NamaPengelola'             => 'required|string|max:255',
            'namaPerusahaan'            => 'required|string|max:255',
            'alamatPerusahaan'          => 'required|string|max:255',
            'noTelp'                    => 'required|string|max:50',
            'kodePos'                   => 'required|string|max:10',
            'jenisUsaha'                => 'required|string|max:255',
            'NamaPemilikPerusahaan'     => 'required|string|max:255',
            'AlamatPemilikPerusahaan'   => 'required|string|max:255',
            'PendirianPerusahaan'       => 'required|date',
            'PerpindahanPerusahaan'     => 'required|date',
            'statusPerusahaan'          => 'required|string',
            'Indonesia'                 => 'required|integer',
            'LuarIndonesia'             => 'required|integer',
            'statusKepemilikan'         => 'required|array',
            'statusPermodalan'          => 'required|array',
            'Pemodalan'                 => 'required|string',
            'AsalNegara'                => 'required|string|max:255',
            // B. KEADAAN KETENAGAKERJAAN
            'waktuKerjaPria'            => 'required|array',
            // Meski di view nama inputnya "waktuKerjaWanita[]" sebaiknya hanya satu pilihan sehingga dapat disimpan sebagai string
            'waktuKerjaWanita'          => 'required|string',
            'JumlahTenagaKerja'         => 'required|integer',
            'PengupahanTertinggi'       => 'required|string',
            'PengupahanTerendah'        => 'required|string',
            'FasillitasKeselamatan'     => 'required|array',
            'FasilitasKesejahteraan'    => 'required|array',
            // BPJS Ketenagakerjaan
            'ProgramJaminanKesehatan'   => 'required|string',
            'ProgramJKK'                => 'required|string',
            'ProgramJHT'                => 'required|string',
            'ProgramJKM'                => 'required|string',
            'ProgramJP'                 => 'required|string',
            // Perangkat Hubungan Industrial
            'PerangkatHub'              => 'required|string',
            'PerangkatHubMemilikiTenagaKerja' => 'required|string',
            'JumlahPenerimaan'          => 'required|integer',
            'JumlahBerhenti'            => 'required|integer',
            'ProgramPelatihan'          => 'required|string',
            'ProgramPemagangan'         => 'required|string',
            // D. TANGGAL LAPOR DAN KEWAJIBAN MELAPOR KEMBALI
            'NomorPelaporan'            => 'required|integer',
            'TanggalLapor'              => 'required|integer',
            'KewajibanLaporKembali'     => 'required|integer',
        ]);

        $pelaporan = Pelaporan::create($validated);
        //dd($pelaporan); // untuk memastikan data berhasil dibuat
    
        return redirect()->back()->with('success', 'Laporan berhasil dikirim.');
    }    
}
