@extends('pdf.layout')

@section('pdf')
    <h1>PEMENANG UNDIAN GRANDPRIZE</h1>
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
                    <td>{{ $value['undianGrandprice']['nomor_undian'] }}</td>
                    <td>{{ $value['undianGrandprice']['nama_peserta'] }}</td>
                    <td>{{ $value['undianGrandprice']['pesertaGrandPrice']['nik'] }}</td>
                    <td>{{ date('d-m-Y', strtotime($value['undianGrandprice']['pesertaGrandPrice']['tanggal_lahir'])) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
