@extends('layouts.app')
@include('contents.undian.custom_cover.styles')
@section('title')
    Undian App
@endsection
@section('content')
   <section id="header">
        <div id="heading">
            <div class="text-center pt-4">
                <img src="{{ asset('assets/img/logo/logo-rm.png') }}" alt="logo" width="400">
            </div>
            <div id="text-heading" style="color: white; font-family:">SELAMAT DATANG</div>
            <div id="text-heading" style="color: white; font-family:">DI ACARA GEBYAR AKHIR TAHUN</div>
            <div id="text-subheading" style="color: white; font-family:">JASA GADAI SYARIAH</div>
        </div>
   </section>

   <section id="content">
        <div id="kolom">
            <div id="kiri">
                <div id="nama-hadiah">Hadiah Utama</div>
                <div class="text-center mb-3" id="image-gold">
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <img src="{{ asset('assets/img/contents/emas.png') }}" alt="Emas" width="300">
                        </div>
                        <div class="mySlides fade">
                            <img src="{{ asset('assets/img/contents/emas1.png') }}" alt="Emas2" width="300">
                        </div>
                        <div class="mySlides fade">
                            <img src="{{ asset('assets/img/contents/emas2.png') }}" alt="Emas3" width="300">
                        </div>
                    </div>
                </div>
                <ul>
                    <li><span class="text-reward" style="font-size: 25px;">Antam 5gr X 2 Keping :</span> <br> <span class="text-senilai" style="font-size: 18px;">Senilai Rp 13.704.176,00</span></li>
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
                            <img src="{{ asset('assets/img/contents/emas.png') }}" alt="Emas" width="300">
                        </div>
                        <div class="mySlides2 fade">
                            <img src="{{ asset('assets/img/contents/emas1.png') }}" alt="Emas2" width="300">
                        </div>
                        <div class="mySlides2 fade">
                            <img src="{{ asset('assets/img/contents/emas2.png') }}" alt="Emas3" width="300">
                        </div>
                    </div>
                </div>
                <ul>
                    <li><span class="text-reward" style="font-size: 25px;">Antam 1gr X 25 Keping :</span> <br> <span class="text-senilai" style="font-size: 18px;">Senilai Rp 35.388.250,00</span></li>
                </ul>
            </div>
        </div>
   </section>
@endsection
@include('contents.undian.custom_cover.scripts')
