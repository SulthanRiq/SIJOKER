@extends('layouts.appuser')

@section('content')
    <div class="text-center" style="margin-top: 150px;">
        <h1>BENTUK LAPORAN</h1>
        <p class="mt-2">
            Sebagaimana dimaksud pada Pasal 6 ayat (2) Undang-undang 7 tahun 1981 Tentang Wajib Lapor Ketenagakerjaan di Perusahaan
        </p>
    </div>
    
    <div style="margin: 0 20px;">
        <h2 class="mt-3">A. KEADAAN PERUSAHAAN</h2>

        <form action="#" method="post">
            @csrf
            <div class="form-group">
                <label for="kodePerusahaan">Kode Perusahaan:</label>
                <input type="text" class="form-control" id="kodePerusahaan" name="kodePerusahaan" required>
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
                <input type="text" class="form-control" id="Indonesia" name="Indonesia" required>
            </div>

            <div class="form-group">
                <label for="LuarIndonesia">Luar Indonesia</label>
                <input type="text" class="form-control" id="LuarIndonesia" name="LuarIndonesia" required>
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
                <label for="AsalNegara">Asal Negara</label>
                <input type="text" class="form-control" id="AsalNegara" name="AsalNegara" required>
            </div>

            <h2 class="mt-3">B. KEADAAN KETENAGAKERJAAN</h2>

 
                
            <!-- Group: Waktu Kerja -->
            <div class="form-group">
            <h6 class="mt-3">Waktu kerja:</h6> 
                <div>
                    <p><strong>Pria</strong></p>
                    <label>
                        <input type="checkbox" name="waktuKerjaPria[]" value="7 jam/hari dan 40 jam/minggu untuk waktu kerja 6 hari/minggu">
                        7 jam/hari dan 40 jam/minggu untuk waktu kerja 6 hari/minggu
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="waktuKerjaPria[]" value="8 jam/hari dan 40 jam/minggu untuk waktu kerja 5 hari/minggu">
                        8 jam/hari dan 40 jam/minggu untuk waktu kerja 5 hari/minggu
                    </label>
                </div>
                <div class="mt-2">
                    <p><strong>Wanita</strong></p>
                    <label>
                        <input type="checkbox" name="waktuKerjaWanita[]" value="9 jam/hari dan maksimum 45 jam dalam 5 hari kerja untuk satu periode kerja">
                        9 jam/hari dan maksimum 45 jam dalam 5 hari kerja untuk satu periode kerja
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="waktuKerjaWanita[]" value="10 jam/hari dan maksimum 50 jam dalam 5 hari kerja untuk satu periode kerja">
                        10 jam/hari dan maksimum 50 jam dalam 5 hari kerja untuk satu periode kerja
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="PenggunaanPeralatan">Penggunaan Peralatan & Bahan</label>
                <input type="text" class="form-control" id="PenggunaanPeralatan" name="PenggunaanPeralatan" placeholder="peralatan/barang" required>
            </div>                  
            <button type="submit" class="btn btn-primary">Kirim Laporan</button>
        </form>
    </div>
@endsection