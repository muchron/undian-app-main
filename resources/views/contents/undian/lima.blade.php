@extends('layouts.app')
@include('contents.undian.custom_lima.styles')
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
                    <span id="kode-acak-1">000-000-00000-0000</span><br>
                    <span id="kode-acak-2">000-000-00000-0000</span><br>
                    <span id="kode-acak-3">000-000-00000-0000</span><br>
                    <span id="kode-acak-4">000-000-00000-0000</span><br>
                    <span id="kode-acak-5">000-000-00000-0000</span>
                </div>
                <div id="button-menu">
                    <div id="button-acak-off" onclick="onShuffle()" style="cursor:pointer"><strong>MULAI</strong></div>
                    <div id="button-acak-on" style="display: none;"><strong>MULAI</strong></div>
                    <div id="button-ulang" onclick="onRefresh()"><strong>REFRESH</strong></div>
                    <div id="button-berhenti" onclick="onStop()" style="cursor:pointer"><strong>STOP</strong></div>
                    {{-- <script>

                    </script> --}}
                </div>
                <div id="peserta-reward">
                    <input type="hidden" name="undian_id_1">
                    <span id="kode-acak-1"></span>
                    <span id="noreg-reward-1">000-000-00000-0000</span>
                    <span id="nama-reward-1">Nama Peserta</span> <br>

                    <input type="hidden" name="undian_id_2">
                    <span id="kode-acak-2"></span>
                    <span id="noreg-reward-2">000-000-00000-0000</span>
                    <span id="nama-reward-2">Nama Peserta</span> <br>

                    <input type="hidden" name="undian_id_3">
                    <span id="kode-acak-3"></span>
                    <span id="noreg-reward-3">000-000-00000-0000</span>
                    <span id="nama-reward-3">Nama Peserta</span> <br>

                    <input type="hidden" name="undian_id_4">
                    <span id="kode-acak-4"></span>
                    <span id="noreg-reward-4">000-000-00000-0000</span>
                    <span id="nama-reward-4">Nama Peserta</span> <br>

                    <input type="hidden" name="undian_id_5">
                    <span id="kode-acak-5"></span>
                    <span id="noreg-reward-5">000-000-00000-0000</span>
                    <span id="nama-reward-5">Nama Peserta</span> <br>
                </div>
                <div id="button-menu-save">
                    <div id="button-simpan" onclick="onSubmit()"><strong>SIMPAN</strong></div>
                    {{-- <script>

                    </script> --}}
                </div>
            </div>
            <div id="kanan">
                <div id="text-congratulation">Selamat Kepada</div>
                <div id="text-congratulation">Pemenang Hadiah Umum : </div>
                <div id="list-reward">
                    <div style="overflow-y: auto; height: 500px; padding-top: 10px;">
                        <table id="table-list-peserta"></table>
                    </div>
                    <a href="{{ route('pemenang-undian-umum-lima.print') }}" target="_blank" class="btn btn-success mt-3" onclick="onRefresh()">Cetak/Print Hasil</a>
                </div>
                <div id="datetimes-content">
                    <div id="tanggal">00/00/00</div>
                    <div id="waktu">00:00:00</div>
                </div>
            </div>
        </div>
    </section>
@endsection
@include('contents.undian.custom_lima.scripts')
