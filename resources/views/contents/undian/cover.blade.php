@extends('layouts.app')
@include('contents.undian.custom_cover.styles')
@section('title')
    Undian App
@endsection
@section('content')
    <section id="header">
        <div id="heading">
            <div class="text-center pt-2">
                <img src="{{ asset('assets/img/logo/bg-header.jpg') }}" alt="logo">
            </div>
            <div id="text-heading" style="color: black; font-family:">ACARA PENGUNDIAN GEBYAR AKHIR TAHUN</div>
        </div>
    </section>

    <section id="content">
        <div id="kolom">
            <div id="kiri">
                <div id="nama-hadiah">Hadiah Utama</div>
                <div class="text-center mb-3" id="image-gold">
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <img src="{{ asset('assets/img/contents/U1.png') }}" alt="Emas" width="300">
                        </div>
                        <div class="mySlides fade">
                            <img src="{{ asset('assets/img/contents/U2.png') }}" alt="Emas2" width="300">
                        </div>
                        <div class="mySlides fade">
                            <img src="{{ asset('assets/img/contents/U3.png') }}" alt="Emas3" width="300">
                        </div>
                    </div>
                </div>
                <ul>
                    <li><span class="text-reward" style="font-size: 25px;">UBS 5.00gr sejumlah 2 Keping :</span> <br> <span
                            class="text-senilai" style="font-size: 18px;">Total Hadiah Senilai Rp 14.300.000,00</span></li>
                </ul>
            </div>
            <div id="tengah">
                <div class="text-center mb-3" id="image-gold">
                    <img src="{{ asset('assets/img/contents/cover.jpg') }}" alt="Emas4" width="800">
                </div>
            </div>
            <div id="kanan">
                <div id="nama-hadiah">Hadiah Umum</div>
                <div class="text-center mb-3" id="image-gold">
                    <div class="slideshow-container">
                        <div class="mySlides2 fade">
                            <img src="{{ asset('assets/img/contents/U4.png') }}" alt="Emas1" width="300">
                        </div>
                        <div class="mySlides2 fade">
                            <img src="{{ asset('assets/img/contents/U5.png') }}" alt="Emas2" width="300">
                        </div>
                        <div class="mySlides2 fade">
                            <img src="{{ asset('assets/img/contents/U6.png') }}" alt="Emas3" width="300">
                        </div>
                    </div>
                </div>
                <ul>
                    <li><span class="text-reward" style="font-size: 25px;">UBS 0.5gr sejumlah 25 Keping :</span> <br> <span
                            class="text-senilai" style="font-size: 18px;">Total Hadiah Senilai Rp 17.400.000,00</span></li>
                </ul>
            </div>
        </div>
    </section>
@endsection
@include('contents.undian.custom_cover.scripts')
