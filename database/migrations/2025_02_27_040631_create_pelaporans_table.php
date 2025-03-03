<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelaporansTable extends Migration
{
    public function up()
    {
        Schema::create('pelaporans', function (Blueprint $table) {
            $table->id();
            // A. KEADAAN PERUSAHAAN
            $table->string('NamaPengelola');
            $table->string('namaPerusahaan');
            $table->string('alamatPerusahaan');
            $table->string('noTelp');
            $table->string('kodePos');
            $table->string('jenisUsaha');
            $table->string('NamaPemilikPerusahaan');
            $table->string('AlamatPemilikPerusahaan');
            $table->date('PendirianPerusahaan');
            $table->date('PerpindahanPerusahaan');
            $table->string('statusPerusahaan');
            $table->integer('Indonesia');
            $table->integer('LuarIndonesia');
            $table->json('statusKepemilikan')->nullable();
            $table->json('statusPermodalan')->nullable();
            $table->string('Pemodalan');
            $table->string('AsalNegara');
            // B. KEADAAN KETENAGAKERJAAN
            $table->json('waktuKerjaPria')->nullable();
            $table->string('waktuKerjaWanita');
            $table->integer('JumlahTenagaKerja');
            $table->string('PengupahanTertinggi');
            $table->string('PengupahanTerendah');
            $table->json('FasillitasKeselamatan')->nullable();
            $table->json('FasilitasKesejahteraan')->nullable();
            // BPJS Ketenagakerjaan
            $table->string('ProgramJaminanKesehatan');
            $table->string('ProgramJKK');
            $table->string('ProgramJHT');
            $table->string('ProgramJKM');
            $table->string('ProgramJP');
            // Perangkat Hubungan Industrial
            $table->string('PerangkatHub');
            $table->string('PerangkatHubMemilikiTenagaKerja');
            $table->integer('JumlahPenerimaan');
            $table->integer('JumlahBerhenti');
            $table->string('ProgramPelatihan');
            $table->string('ProgramPemagangan');
            // D. TANGGAL LAPOR DAN KEWAJIBAN MELAPOR KEMBALI
            $table->integer('NomorPelaporan');
            $table->integer('TanggalLapor');
            $table->integer('KewajibanLaporKembali');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('pelaporans');
    }
}
