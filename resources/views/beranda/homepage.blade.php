@extends('layouts.homepage')

@section('content')
    @include('layouts.navbar')
    <div class="homepage position-relative">
        <div id="carouselExampleSlidesOnly" class="slide blur-warm position-relative" data-bs-ride="carousel">
            <div class="carousel-inner carousel">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/bakpao-karakter.jpeg') }}" class="d-block w-100" alt="Bakpao Karakter">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/brownis.jpg') }}" class="d-block w-100" alt="Bolu Gulung">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/ximilu.jpeg') }}" class="d-block w-100" alt="Bolu Gulung">
                </div>
            </div>
        </div>
        <div class="content z-1 position-absolute translate-middle text-start">
            <p class="text-white fs-1 fw-normal">Laper tapi mager? <br> Pesen makan lewat <strong>Gadiza Food</strong> aja!</p>
            <br>
            <p class="fs-5 fw-normal text-white">Makan Siang Kantoran? Bosen? Cus Coba yang Ini, Dijamin <br> Kantor Jadi Rame! Mau Diet? Lupain Dulu Deh, Makanan Ini <br> Nggak Bisa Ditahan!</p>
            <a class="text-white btn btn-primary mt-5 rounded-pill py-2 px-4" href="/menu" role="button">Explore Menu <i class="bi bi-caret-right-fill"></i></a>
        </div>
@endsection
