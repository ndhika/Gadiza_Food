@extends('layouts.homepage')

@section('content')
    @include('layouts.navbar')
    <div class="homepage position-relative">
        <img src="{{ asset('assets/img/bg-homepage.jpg') }}" class="z-0 img-fluid blur-warm" alt="Background Image">
        <div class="content z-1 position-absolute  translate-middle text-start">
            <p class="text-black fs-1 fw-normal">Laper tapi mager? <br> Pesen makan lewat <strong>Gadiza Food</strong> aja!</p>
        <br>
            <p class="fs-5 fw-normal">Makan Siang Kantoran? Bosen? Cus Coba yang Ini, Dijamin <br> Kantor Jadi Rame! Mau Diet? Lupain Dulu Deh, Makanan Ini <br> Nggak Bisa Ditahan!</p>
            <a class="btn btn-primary mt-5 rounded-pill py-2 px-4" href="/menu" role="button">Explore Menu <i class="bi bi-caret-right-fill"></i></a>
        </div>
    </div>
    <div class="nextpage position-relative">
        <div class="overlay">
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus blanditiis quasi, saepe et quia voluptates possimus placeat nisi aliquam impedit consequatur optio sint repellendus. Necessitatibus cumque quas sunt fugit porro.</h1>
        </div>
    </div>
@endsection





