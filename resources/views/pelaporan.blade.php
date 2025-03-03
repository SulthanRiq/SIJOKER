@extends('layouts.appuser')

@section('content')
<style>
    #Indonesia::placeholder {
        color: #cccccc; 
        opacity: 0.6; 
    }
    #LuarIndonesia::placeholder {
        color: #cccccc; 
        opacity: 0.6; 
    }
    /* Styling untuk card notifikasi */
    #notificationCard {
        display: none;
        position: fixed;
        top: 20%;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1050;
        width: 90%;
        max-width: 500px;
    }
</style>
<div class="text-center" style="margin-top: 150px;">
    <h1>BENTUK LAPORAN</h1>
    <p class="mt-2">
        Undang Undang Nomor 6 Tahun 2023 dan Undang Undang Nomor 13 tahun 2003 tentang Ketenagakerjaan
    </p>
</div>

<div style="margin: 0 50px;">
    <h2 class="mt-3">A. KEADAAN PERUSAHAAN</h2>

    <!-- Tambahkan id pada form -->
    <form id="laporanForm" action="{{ route('pelaporan.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="NamaPengelola">Nama Pengelola:</label>
            <input type="text" class="form-control" id="NamaPengelola" name="NamaPengelola" required>
        </div>
        <div class="form-group">
            <label for="namaPerusahaan">Nama Perusahaan:</label>
            <input type="text" class="form-control" id="namaPerusahaan" name="namaPerusahaan" required>
        </div>
        <div class="form-group">
            <label for="alamatPerusahaan">Alamat Perusahaan:</label>
            <input type="text" class="form-control" id="alamatPerusahaan" name="alamatPerusahaan" required>
        </div>
        <div class="form-group">
            <label for="noTelp">No Telp/Fax:</label>
            <input type="text" class="form-control" id="noTelp" name="noTelp" required>
        </div>
        <div class="form-group">
            <label for="kodePos">Kode Pos:</label>
            <input type="text" class="form-control" id="kodePos" name="kodePos" required>
        </div>
        <div class="form-group">
            <label for="jenisUsaha">Jenis Usaha:</label>
            <input type="text" class="form-control" id="jenisUsaha" name="jenisUsaha" required>
        </div>
        <div class="form-group">
            <label for="NamaPemilikPerusahaan">Nama Pemilik Perusahaan:</label>
            <input type="text" class="form-control" id="NamaPemilikPerusahaan" name="NamaPemilikPerusahaan" required>
        </div>
        <div class="form-group">
            <label for="AlamatPemilikPerusahaan">Alamat Pemilik Perusahaan:</label>
            <input type="text" class="form-control" id="AlamatPemilikPerusahaan" name="AlamatPemilikPerusahaan" required>
        </div>
        <div class="form-group">
            <label for="PendirianPerusahaan">Pendirian Perusahaan:</label>
            <input type="date" class="form-control" id="PendirianPerusahaan" name="PendirianPerusahaan" required>
        </div>
        <div class="form-group">
            <label for="PerpindahanPerusahaan">Perpindahan Perusahaan:</label>
            <input type="date" class="form-control" id="PerpindahanPerusahaan" name="PerpindahanPerusahaan" required>
        </div>
        <div class="form-group">
            <label>Status Perusahaan:</label>
            <div>
                <label>
                    <input type="radio" name="statusPerusahaan" value="Pusat"> Pusat
                </label>
                <label>
                    <input type="radio" name="statusPerusahaan" value="Cabang"> Cabang
                </label>
            </div>
        </div>

        <h6 class="mt-3">Jumlah Cabang</h6>
        <div class="form-group">
            <label for="Indonesia">Indonesia</label>
            <input type="text" class="form-control" id="Indonesia" name="Indonesia" placeholder="cabang di indonesia jika ada" required>
        </div>
        <div class="form-group">
            <label for="LuarIndonesia">Luar Indonesia</label>
            <input type="text" class="form-control" id="LuarIndonesia" name="LuarIndonesia" placeholder="cabang di luar indonesia jika ada" required>
        </div>

        <!-- Group: Status Kepemilikan -->
        <div class="form-group">
            <label>Status Kepemilikan:</label>
            <div>
                <label>
                    <input type="checkbox" name="statusKepemilikan[]" value="Swasta"> Swasta
                </label>
                <label>
                    <input type="checkbox" name="statusKepemilikan[]" value="Persero"> Persero
                </label>
                <label>
                    <input type="checkbox" name="statusKepemilikan[]" value="Perum"> Perum
                </label>
                <label>
                    <input type="checkbox" name="statusKepemilikan[]" value="Perseorangan"> Perseorangan
                </label>
                <label>
                    <input type="checkbox" name="statusKepemilikan[]" value="Patungan"> Patungan
                </label>
                <label>
                    <input type="checkbox" name="statusKepemilikan[]" value="Perusahaan Daerah"> Perusahaan Daerah
                </label>
                <label>
                    <input type="checkbox" name="statusKepemilikan[]" value="Yayasan"> Yayasan
                </label>
                <label>
                    <input type="checkbox" name="statusKepemilikan[]" value="Koperasi"> Koperasi
                </label>
            </div>
        </div>

        <!-- Group: Status Permodalan -->
        <div class="form-group">
            <label>Status Permodalan:</label>
            <div>
                <label>
                    <input type="checkbox" name="statusPermodalan[]" value="PMDN"> PMDN
                </label>
                <label>
                    <input type="checkbox" name="statusPermodalan[]" value="Swasta Nasional"> Swasta Nasional
                </label>
                <label>
                    <input type="checkbox" name="statusPermodalan[]" value="PMA"> PMA
                </label>
                <label>
                    <input type="checkbox" name="statusPermodalan[]" value="Joint Venture"> Joint Venture
                </label>
            </div>
        </div>
        <div class="form-group">
            <h6>Pemodalan:</h6>
            <div>
                <label>
                    <input type="radio" name="Pemodalan" value="Kurang Dari 1 Miliar"> Kurang Dari 1 Miliar
                </label>
                <label>
                    <input type="radio" name="Pemodalan" value="1 Miliar Smpai 5 Miliar"> 1 Miliar Sampai 5 Miliar
                </label>
                <label>
                    <input type="radio" name="Pemodalan" value="Lebih dari 5 Miliar"> Lebih dari 5 Miliar
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="AsalNegara">Asal Negara</label>
            <input type="text" class="form-control" id="AsalNegara" name="AsalNegara" required>
        </div>

        <h2 class="mt-3">B. KEADAAN KETENAGAKERJAAN</h2>
        <!-- Group: Waktu Kerja -->
        <div class="form-group">
            <h6 class="mt-3"><strong>Waktu kerja:</strong></h6> 
            <div>
                <p>Pria</p>
                <label>
                    <input type="radio" name="waktuKerjaPria[]" value="7 jam/hari dan 40 jam/minggu untuk waktu kerja 6 hari/minggu">
                    7 jam/hari dan 40 jam/minggu untuk waktu kerja 6 hari/minggu
                </label>
                <br>
                <label>
                    <input type="radio" name="waktuKerjaPria[]" value="8 jam/hari dan 40 jam/minggu untuk waktu kerja 5 hari/minggu">
                    8 jam/hari dan 40 jam/minggu untuk waktu kerja 5 hari/minggu
                </label>
            </div>
            <div class="mt-2">
                <p>Wanita</p>
                <label>
                    <input type="radio" name="waktuKerjaWanita" value="9 jam/hari dan maksimum 45 jam dalam 5 hari kerja untuk satu periode kerja">
                    9 jam/hari dan maksimum 45 jam dalam 5 hari kerja untuk satu periode kerja
                </label>
                <br>
                <label>
                    <input type="radio" name="waktuKerjaWanita" value="10 jam/hari dan maksimum 50 jam dalam 5 hari kerja untuk satu periode kerja">
                    10 jam/hari dan maksimum 50 jam dalam 5 hari kerja untuk satu periode kerja
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="JumlahTenagaKerja">Jumlah Tenaga Kerja</label>
            <input type="number" class="form-control" id="JumlahTenagaKerja" name="JumlahTenagaKerja" required>
        </div>
        <p><strong>Pengupahan</strong></p>
        <div class="form-group">
            <label for="PengupahanTertinggi">a. Tingkat Tertinggi</label>
            <input type="text" class="form-control" id="PengupahanTertinggi" name="PengupahanTertinggi" required>
        </div>
        <div class="form-group">
            <label for="PengupahanTerendah">b. Tingkat Terendah</label>
            <input type="text" class="form-control" id="PengupahanTerendah" name="PengupahanTerendah" required>
        </div>

        <!-- Group: Fasilitas Perusahaan -->
        <div class="form-group">
            <p><strong>Fasilitas Perusahaan:</strong></p>
            <div>
                <p>a. Fasillitas Keselamatan & Kesehatan</p>
                <label>
                    <input type="checkbox" name="FasillitasKeselamatan[]" value="Perlindungan Diri"> Perlindungan Diri
                </label>
                <label>
                    <input type="checkbox" name="FasillitasKeselamatan[]" value="Pelayanan Kesehatan"> Pelayanan Kesehatan
                </label>
                <label>
                    <input type="checkbox" name="FasillitasKeselamatan[]" value="Ruang P3K"> Ruang P3K
                </label>
                <label>
                    <input type="checkbox" name="FasillitasKeselamatan[]" value="Alat Pelindung Diri"> Alat Pelindung Diri
                </label>
                <label>
                    <input type="checkbox" name="FasillitasKeselamatan[]" value="Penyelenggaraan Makanan"> Penyelenggaraan Makanan
                </label>
                <label>
                    <input type="checkbox" name="FasillitasKeselamatan[]" value="Kotak P3K"> Kotak P3K
                </label>
                <label>
                    <input type="checkbox" name="FasillitasKeselamatan[]" value="Penanganan Limbah"> Penanganan Limbah
                </label>
            </div>
            <div>
                <p>b. Fasilitas Kesejahteraan</p>
                <label>
                    <input type="checkbox" name="FasilitasKesejahteraan[]" value="Keluarga Berencana"> Keluarga Berencana
                </label>
                <label>
                    <input type="checkbox" name="FasilitasKesejahteraan[]" value="Tempat Penitipan Anak"> Tempat Penitipan Anak
                </label>
                <label>
                    <input type="checkbox" name="FasilitasKesejahteraan[]" value="Perumahan Pekerja"> Perumahan Pekerja
                </label>
                <label>
                    <input type="checkbox" name="FasilitasKesejahteraan[]" value="Fasilitas Ibadah"> Fasilitas Ibadah
                </label>
                <label>
                    <input type="checkbox" name="FasilitasKesejahteraan[]" value="Kantin/Catering"> Kantin/Catering
                </label>
                <label>
                    <input type="checkbox" name="FasilitasKesejahteraan[]" value="Fasilitas Rekreasi"> Fasilitas Rekreasi
                </label>
                <label>
                    <input type="checkbox" name="FasilitasKesejahteraan[]" value="Koperasi"> Koperasi
                </label>
                <label>
                    <input type="checkbox" name="FasilitasKesejahteraan[]" value="Fasilitas Ibadah"> Fasilitas Ibadah
                </label>
                <label>
                    <input type="checkbox" name="FasilitasKesejahteraan[]" value="Ruang Merokok"> Ruang Merokok
                </label>
                <label>
                    <input type="checkbox" name="FasilitasKesejahteraan[]" value="Armada Antar Jemput"> Armada Antar Jemput
                </label>
                <label>
                    <input type="checkbox" name="FasilitasKesejahteraan[]" value="Fasilitas Kesenian"> Fasilitas Kesenian
                </label>
            </div>
        </div>

        <!-- Group: BPJS Ketenagakerjaan -->
        <p><strong>BPJS Ketenagakerjaan</strong></p>
        <div>
            <p>a. BPJS Ketenagakerjaan</p>
            <div class="form-group">
                <label for="ProgramJaminanKesehatan">ProgramJaminanKesehatan</label>
                <input type="text" class="form-control" id="ProgramJaminanKesehatan" name="ProgramJaminanKesehatan" placeholder="Jumlah Pekerja" required>
            </div>
            <div class="form-group">
                <label for="ProgramJKK">Program JKK</label>
                <input type="text" class="form-control" id="ProgramJKK" name="ProgramJKK" placeholder="Jumlah Pekerja" required>
            </div>
            <div class="form-group">
                <label for="ProgramJHT">Program JHT</label>
                <input type="text" class="form-control" id="ProgramJHT" name="ProgramJHT" placeholder="Jumlah Pekerja" required>
            </div>
            <div class="form-group">
                <label for="ProgramJKM">Program JKM</label>
                <input type="text" class="form-control" id="ProgramJKM" name="ProgramJKM" placeholder="Jumlah Pekerja" required>
            </div>
            <div class="form-group">
                <label for="ProgramJP">Program JP</label>
                <input type="text" class="form-control" id="ProgramJP" name="ProgramJP" placeholder="Jumlah Pekerja" required>
            </div>
        </div>

        <!-- Group: Perangkat Hubungan Industrial -->
        <div>
            <a><strong>Perangkat Hubungan Industrial</strong></a>
            <p>a. Perangkat Hub. Kerja</p>
            <label>
                <input type="radio" name="PerangkatHub" value="Perjanjian Perusahaan (PP)"> Perjanjian Perusahaan (PP)
            </label>
            <label>
                <input type="radio" name="PerangkatHub" value="Perjanjian Kerja Bersama (PKB)"> Perjanjian Kerja Bersama (PKB)
            </label>
            <p>Sudah memiliki perencanaan tenaga kerja?</p>
            <label>
                <input type="radio" name="PerangkatHubMemilikiTenagaKerja" value="ya"> ya
            </label>
            <label>
                <input type="radio" name="PerangkatHubMemilikiTenagaKerja" value="tidak"> tidak
            </label>
            <div class="form-group">
                <label for="JumlahPenerimaan">a. Jumlah penerimaan Pekerja selama 12 bulan terakhir</label>
                <input type="number" class="form-control" id="JumlahPenerimaan" name="JumlahPenerimaan" required>
            </div>
            <div class="form-group">
                <label for="JumlahBerhenti">b. Jumlah Pekerja yang berhenti selama 12 bulan terakhir</label>
                <input type="number" class="form-control" id="JumlahBerhenti" name="JumlahBerhenti" required>
            </div>
            <p>a. Program Pelatihan bagi pekerja</p>
            <label>
                <input type="radio" name="ProgramPelatihan" value="ya"> ya
            </label>
            <label>
                <input type="radio" name="ProgramPelatihan" value="tidak"> tidak
            </label>
            <p>b. ProgramPemagangan</p>
            <label>
                <input type="radio" name="ProgramPemagangan" value="ya"> ya
            </label>
            <label>
                <input type="radio" name="ProgramPemagangan" value="tidak"> tidak
            </label>
        </div>

        <!-- Group: C. PAKTA INTEGRITAS -->
        <h2 class="mt-3">C. PAKTA INTEGRITAS</h2>
        <p class="mt-2">
            Bahwa informasi WLKP online yang kami sampaikan adalah benar, transparan, dan profesional untuk memberikan hasil kerja yang terbaik sesuai ketentuan peraturan perundangan-undangan
        </p>
        <p class="mt-2">
            Apabila informasi yang kami sampaikan ada hal - hal yang melanggar yang dinyatakan dalam pakta integritas ini kami bersedia menerima sanksi administrasi, dan digugat secara perdata dan/ atau dilaporkan secara pidana.
        </p>

        <!-- Group: D. TANGGAL LAPOR DAN KEWAJIBAN MELAPOR KEMBALI -->
        <h2 class="mt-3">D. TANGGAL LAPOR DAN KEWAJIBAN MELAPOR KEMBALI</h2>
        <div class="form-group">
            <label for="NomorPelaporan">a. Nomor Pelaporan</label>
            <input type="number" class="form-control" id="NomorPelaporan" name="NomorPelaporan" required>
        </div>
        <div class="form-group">
            <label for="TanggalLapor">b. Tanggal Lapor</label>
            <input type="number" class="form-control" id="TanggalLapor" name="TanggalLapor" required>
        </div>
        <div class="form-group">
            <label for="KewajibanLaporKembali">c. Kewajiban Lapor Kembali</label>
            <input type="number" class="form-control" id="KewajibanLaporKembali" name="KewajibanLaporKembali" required>
        </div>

        <div class="text-center" style="margin-top: 30px;">
            <button type="submit" class="btn btn-primary">Kirim Laporan</button>
        </div>
    </form>
</div>

<!-- Card Notifikasi (awalannya disembunyikan) -->
<div id="notificationCard" class="card">
    <div class="card-body">
        <p class="card-text">Harap ke DISNAKER untuk peninjauan lebih lanjut.</p>
        <button id="okButton" class="btn btn-success">OK</button>
    </div>
</div>

<script>
    // Fungsi untuk memformat input menjadi rupiah
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);
        if (ribuan) {
            var separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix === undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
    }
    // Memformat saat pengguna mengetik
    document.getElementById('PengupahanTertinggi').addEventListener('keyup', function(e) {
        this.value = formatRupiah(this.value, 'Rp ');
    });
    document.getElementById('PengupahanTerendah').addEventListener('keyup', function(e) {
        this.value = formatRupiah(this.value, 'Rp ');
    });

    // Tangani event submit form untuk menampilkan notifikasi terlebih dahulu
    document.getElementById('laporanForm').addEventListener('submit', function(e) {
        // Cegah submit form secara langsung
        e.preventDefault();
        // Tampilkan card notifikasi
        document.getElementById('notificationCard').style.display = 'block';
    });
    // Setelah klik OK, sembunyikan notifikasi dan submit form
    document.getElementById('okButton').addEventListener('click', function() {
        document.getElementById('notificationCard').style.display = 'none';
        document.getElementById('laporanForm').submit();
    });
</script>
@endsection
