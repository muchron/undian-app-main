@extends('pdf.layout')

@section('pdf')
    <h1>PEMENANG UNDIAN UMUM LIMA</h1>
    <hr />
    <table border="1">
        <thead>
            <tr>
                <th>#</th>
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
@endsection
