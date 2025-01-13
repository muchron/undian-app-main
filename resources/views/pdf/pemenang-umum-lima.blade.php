@extends('pdf.layout')

@section('pdf')
    <div class="text-center" style="margin: 0 auto; width: 100%;">
        <h3 class="text-center" style="text-align: center; margin: 0;">BERITA ACARA</h3>
        <h3 class="text-center" style="text-align: center; margin: 5px 0;">UNDIAN GEBYAR AKHIR TAHUN</h3>
        <h3 class="text-center" style="text-align: center; margin: 0;">PT. JASA GADAI SYARIAH</h3>
    </div>
    <br>
    <br>
    <br>
    <div class="text-justife" style="margin: 0 auto; width: 100%;">
        <label><Strong>HADIAH UMUM</Strong></label>
    </div>
    <div>
        <p>Dilaksanakan pada hari Senin, tanggal 20 Januari 2025 di Kantor Pusat PT Jasa Gadai Syariah </p>
        <p>Jl. Dr. Cipto No. 88 Pekalongan pukul xx.xx WIB</p>
        <br>
        <p>Dihadiri oleh Direksi, Kepala unit dan perwakilan Nasabah. </p>
    </div>
    <hr />
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Undian</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Tanggal Lahir</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($data as $d => $value)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $value['undian']['nomor_undian'] }}</td>
                    <td>{{ $value['undian']['nama_peserta'] }}</td>
                    <td>{{ $value['undian']['pesertaUmumLima']['nik'] }}</td>
                    <td>{{ date('d-m-Y', strtotime($value['undian']['pesertaUmumLima']['tanggal_lahir'])) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        <p>Demikian berita acara dibuat pada hari dan tanggal tersebut diatas.</p>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="text-center" style="margin: 0 auto; width: 100%;">
        <p class="text-center" style="text-align: center; margin: 0;">Pekalongan, 20 Januari 2025</p>
        <p class="text-center" style="text-align: center; margin: 5px 0;">PT Jasa Gadai Syariah</p>
    </div>
@endsection
