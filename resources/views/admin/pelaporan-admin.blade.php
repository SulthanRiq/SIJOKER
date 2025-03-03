@extends('layouts.adminapp')

@section('title', 'Pelaporan')

@section('content')
<div class="container-fluid px-4 py-5">
    <div class="card shadow-lg border-0 rounded-lg">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0"><i class="fas fa-bullhorn"></i> Pelaporan</h4>
            <!-- Tombol Download Excel -->
            <a href="{{ url('/export-excel') }}" class="btn btn-success">
                <i class="fas fa-download"></i> Download Excel
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Pengelola</th>
                            <th>Nama Perusahaan</th>
                            <th>Alamat Perusahaan</th>
                            <th>No Telp</th>
                            <th>Kode Pos</th>
                            <th>Jenis Usaha</th>
                            <th>Nama Pemilik Perusahaan</th>
                            <th>Alamat Pemilik Perusahaan</th>
                            <th>Pendirian Perusahaan</th>
                            <th>Perpindahan Perusahaan</th>
                            <th>Status Perusahaan</th>
                            <th>Indonesia</th>
                            <th>Luar Indonesia</th>
                            <th>Status Kepemilikan</th>
                            <th>Status Permodalan</th>
                            <th>Pemodalan</th>
                            <th>Asal Negara</th>
                            <th>Waktu Kerja Pria</th>
                            <th>Waktu Kerja Wanita</th>
                            <th>Jumlah Tenaga Kerja</th>
                            <th>Pengupahan Tertinggi</th>
                            <th>Pengupahan Terendah</th>
                            <th>Fasillitas Keselamatan</th>
                            <th>Fasilitas Kesejahteraan</th>
                            <th>Program Jaminan Kesehatan</th>
                            <th>Program JKK</th>
                            <th>Program JHT</th>
                            <th>Program JKM</th>
                            <th>Program JP</th>
                            <th>Perangkat Hub</th>
                            <th>Perangkat Hub tenaga kerja</th>
                            <th>Jumlah Penerimaan</th>
                            <th>Jumlah Berhenti</th>
                            <th>Program Pelatihan</th>
                            <th>Program Pemagangan</th>
                            <th>Nomor Pelaporan</th>
                            <th>Tanggal Lapor</th>
                            <th>Kewajiban Lapor Kembali</th>
                            <th>tanggal dibuat</th>
                            <th>tanggal diperbaharui</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pelaporans as $index => $laporan)
                        <tr>
                            <td>{{ $laporan->id }}</td>
                            <td>{{ $laporan->NamaPengelola }}</td>
                            <td>{{ $laporan->namaPerusahaan }}</td>
                            <td>{{ $laporan->alamatPerusahaan }}</td>
                            <td>{{ $laporan->noTelp }}</td>
                            <td>{{ $laporan->kodePos }}</td>
                            <td>{{ $laporan->jenisUsaha }}</td>
                            <td>{{ $laporan->NamaPemilikPerusahaan }}</td>
                            <td>{{ $laporan->AlamatPemilikPerusahaan }}</td>
                            <td>{{ $laporan->PendirianPerusahaan }}</td>
                            <td>{{ $laporan->PerpindahanPerusahaan }}</td>
                            <td>{{ $laporan->statusPerusahaan }}</td>
                            <td>{{ $laporan->Indonesia }}</td>
                            <td>{{ $laporan->LuarIndonesia }}</td>
                            <td>
                                @if(is_array($laporan->statusKepemilikan))
                                    {{ implode(', ', $laporan->statusKepemilikan) }}
                                @else
                                    {{ $laporan->statusKepemilikan }}
                                @endif
                            </td>
                            <td>
                                @if(is_array($laporan->statusPermodalan))
                                    {{ implode(', ', $laporan->statusPermodalan) }}
                                @else
                                    {{ $laporan->statusPermodalan }}
                                @endif
                            </td>
                            <td>{{ $laporan->Pemodalan }}</td>
                            <td>{{ $laporan->AsalNegara }}</td>
                            <td>
                                @if(is_array($laporan->waktuKerjaPria))
                                    {{ implode(', ', $laporan->waktuKerjaPria) }}
                                @else
                                    {{ $laporan->waktuKerjaPria }}
                                @endif
                            </td>
                            <td>{{ $laporan->waktuKerjaWanita }}</td>
                            <td>{{ $laporan->JumlahTenagaKerja }}</td>
                            <td>{{ $laporan->PengupahanTertinggi }}</td>
                            <td>{{ $laporan->PengupahanTerendah }}</td>
                            <td>
                                @if(is_array($laporan->FasillitasKeselamatan))
                                    {{ implode(', ', $laporan->FasillitasKeselamatan) }}
                                @else
                                    {{ $laporan->FasillitasKeselamatan }}
                                @endif
                            </td>
                            <td>
                                @if(is_array($laporan->FasilitasKesejahteraan))
                                    {{ implode(', ', $laporan->FasilitasKesejahteraan) }}
                                @else
                                    {{ $laporan->FasilitasKesejahteraan }}
                                @endif
                            </td>
                            <td>{{ $laporan->ProgramJaminanKesehatan }}</td>
                            <td>{{ $laporan->ProgramJKK }}</td>
                            <td>{{ $laporan->ProgramJHT }}</td>
                            <td>{{ $laporan->ProgramJKM }}</td>
                            <td>{{ $laporan->ProgramJP }}</td>
                            <td>{{ $laporan->PerangkatHub }}</td>
                            <td>{{ $laporan->PerangkatHubMemilikiTenagaKerja }}</td>
                            <td>{{ $laporan->JumlahPenerimaan }}</td>
                            <td>{{ $laporan->JumlahBerhenti }}</td>
                            <td>{{ $laporan->ProgramPelatihan }}</td>
                            <td>{{ $laporan->ProgramPemagangan }}</td>
                            <td>{{ $laporan->NomorPelaporan }}</td>
                            <td>{{ $laporan->TanggalLapor }}</td>
                            <td>{{ $laporan->KewajibanLaporKembali }}</td>
                            <td>{{ $laporan->created_at }}</td>
                            <td>{{ $laporan->updated_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection