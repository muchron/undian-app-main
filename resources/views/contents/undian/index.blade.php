@extends('layouts.app')
@include('contents.undian.custom.styles')
@section('title')
    Undian App
@endsection
@section('content')
    <section id="header">
        <div id="heading">
            <div class="text-center pt-2">
                <img src="{{ asset('assets/img/logo/bg-header-2.jpg') }}" alt="logo">
            </div>
        </div>
    </section>
    <section id="content">
        <div id="kolom">
            <div id="tengah">
                <div id="kode-acak">
                    000-000-00000-0000
                </div>
                <div id="button-menu">
                    <div id="button-acak-off" onclick="onShuffle()"><strong>MULAI</strong></div>
                    <div id="button-acak-on" style="display: none;"><strong>MULAI</strong></div>
                    <div id="button-ulang" onclick="onRefresh()"><strong>REFRESH</strong></div>
                    <div id="button-berhenti" onclick="onStop()"><strong>STOP</strong></div>
                </div>
                <div id="peserta-reward">
                    <input type="hidden" name="undian_id">
                    <span id="noreg-reward">000-000-00000-0000</span> <br>
                    <span id="nama-reward">Nama Peserta</span>
                </div>
                <div id="button-menu-save">
                    <div id="button-simpan" onclick="onSubmit()"><strong>SIMPAN</strong></div>
                </div>
                <br>
            </div>
            <div id="kanan">
                <div id="text-congratulation">Selamat Kepada</div>
                <div id="text-congratulation">Pemenang Hadiah Umum : </div>
                {{-- <div id="text-congratulation">Total Pemenang: <span id="total-pemenang">0</span></div> --}}
                <div id="list-reward">
                    <div style="overflow-y: auto; height: 500px; padding-top: 10px;">
                        <table id="table-list-peserta"></table>
                    </div>
                </div>
                <div id="datetimes-content">
                    <div id="tanggal">29/08/2024</div>
                    <div id="waktu">16:00:00</div>
                </div>
            </div>
        </div>
    </section>
@endsection
@include('contents.undian.custom.scripts')
