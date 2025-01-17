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
        <label><Strong>HADIAH GRANDPRIZE</Strong></label>
    </div>
    <div>
        <p style="font-size: 12px;">Dilaksanakan pada hari Senin, tanggal 20 Januari 2025 di Kantor Pusat PT Jasa Gadai Syariah </p>
        <p style="font-size: 12px;">Jl. Dr. Cipto No. 88 Pekalongan pukul {{ Carbon\Carbon::now()->format('H:i:s') }} WIB</p>
        <p style="font-size: 12px;">Dihadiri oleh Direksi, Kepala unit dan perwakilan Nasabah. </p>
    </div>
    <hr />
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nomor Undian</th>
                <th>Nama</th>
                <th>NIK</th>
                {{-- <th>Tanggal Lahir</th> --}}
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($data as $d => $value)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $value['undianGrandprice']['nomor_undian'] }}</td>
                    <td>{{ $value['undianGrandprice']['nama_peserta'] }}</td>
                    <td>{{ $value['undianGrandprice']['pesertaGrandPrice']['nik'] }}</td>
                    {{-- <td>{{ date('d-m-Y', strtotime($value['undianGrandprice']['pesertaGrandPrice']['tanggal_lahir'])) }} --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        <p style="font-size: 12px;">Demikian berita acara dibuat pada hari dan tanggal tersebut diatas.</p>
    </div>
    <br>
    <div class="text-center" style="margin: 0 auto; width: 100%;">
        <p class="text-center" style="text-align: center; margin: 0; font-size: 12px;">Pekalongan, 20 Januari 2025</p>
        <p class="text-center" style="text-align: center; margin: 5px 0; font-size: 12px;">PT Jasa Gadai Syariah</p>
    </div>
    <table id="second-table" style="width: 100%; text-align: center;">
        <tr>
            <td style="width: 50%; padding: 40px; text-align: center;"></td>
            <td style="width: 50%; padding: 40px; text-align: center;"></td>
        </tr>
        <tr>
            <td style="text-align: center;"><span style="border-bottom: 1px solid black; padding: 10px;">Sanyoto</span></td>
            <td style="text-align: center;"><span style="border-bottom: 1px solid black; padding: 10px;">Rizqa Shafira Putri</span></td>
        </tr>
        <tr>
            <td style="text-align: center;">Direktur Utama</td>
            <td style="text-align: center;">Direktur</td>
        </tr>
    </table>
    <table id="second-table" style="width: 100%; text-align: center;">
        <tr>
            <td style="width: 33.33%; padding: 40px; text-align: center;"></td>
            <td style="width: 33.33%; padding: 40px; text-align: center;"></td>
            <td style="width: 33.33%; padding: 40px; text-align: center;"></td>
        </tr>
        <tr>
            <td style="text-align: center;"><div style="width: 4cm; margin: 0 auto; border-top: 1px solid black; padding: 10px;">Saksi I</div></td>
            <td style="text-align: center;"><div style="width: 4cm; margin: 0 auto; border-top: 1px solid black; padding: 10px;">Saksi II</div></td>
            <td style="text-align: center;"><div style="width: 4cm; margin: 0 auto; border-top: 1px solid black; padding: 10px;">Saksi III</div></td>
        </tr>
    </table>
@endsection
