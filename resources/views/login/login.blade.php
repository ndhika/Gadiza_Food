@extends('layouts.login')

@section('content')

@if (session('success'))
    <div id="notification" class="alert alert-success" role="alert">
    <strong>Register Berhasil!</strong> Silakan Login Terlebih Dahulu.
</div>
@endif
@if (session()->has('loginError'))
    <div id="notification" class="alert alert-danger" role="alert">
    {{ session('loginError')}}
</div>
@endif
    <div class="main overflow-y-hidden bg-white position-absolute top-50 start-50 translate-middle rounded h-auto my-auto p-3 px-2 text-black">
            <center><img src="assets/img/logo.png" class="img-fluid " alt="logo" style="width: 90px;"></center>
            <p class="text-center mt-1 fs-4">Login</p>
            <form action="/login" method="post">
            @csrf
            <div class="mb-2 mt-2 mx-3">
                <label for="email" class="form-label fs-6 mb-1">Email</label>
                <input type="text" name="email" class="form-control mx-auto border border-black @error('email') 
                is-invalid border_awal @enderror" id="email" placeholder="Email" value="{{ old('email')}}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-2 mt-2 mx-3">
                <label for="password" class="form-label fs-6 mb-1">Password</label>
                <div class="input-group">
                    <input type="password" name="password" class="form-control border border-black border-end-0" id="password" placeholder="Password">
                    <button class="btn border-top border border-black border-bottom border-end border-start-0" type="button" id="togglePassword">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                </div>
            </div>
            {{-- <div class="text-end mt-3 me-3">
                <a href="#">Lupa password?</a>
            </div> --}}
            <div class="tombol d-grid col-11 mx-auto mt-4">
                <button type="submit" class="btn mt-2">Login</button>
            </div>
            <div class="text-center mt-3">
                <p>Belum punya akun? <a href="/register">Daftar</a></p>
            </div>
        </form>
    </div>

    <script src="{{ asset('assets/js/login.js') }}"></script> 
@endsection