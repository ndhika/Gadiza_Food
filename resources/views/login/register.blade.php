@extends('layouts.login')

@section('content')
        <div class="second  bg-white position-absolute top-50 start-50 translate-middle rounded h-auto my-auto p-2 px-3 text-black">
            <center><img src="assets/img/logo.png" class="img-fluid " alt="logo" style="width: 90px;"></center>
            <p class="text-center mt-1 fs-4">Buat Akun</p>
            <form  action="/register" method="post">
            @csrf
            <div class="mb-2 mt-2 mx-3">
                <label for="nama" class="form-label fs-6 mb-1">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control mx-auto border border-black @error('nama') 
                is-invalid border_awal @enderror" id="nama" placeholder="nama" value="{{ old('nama')}}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-2 mt-2 mx-3">
                <label for="username" class="form-label fs-6 mb-1">Username</label>
                <input type="text" name="username" class="form-control mx-auto border border-black @error('username') 
                is-invalid border_awal @enderror" id="username" placeholder="Username" value="{{ old('username')}}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-2 mt-2 mx-3">
                <label for="no_telepon" class="form-label fs-6 mb-1">No. Telepon</label>
                <input type="text" name="no_telepon" class="form-control mx-auto border border-black @error('no_telepon') 
                is-invalid border_awal @enderror" id="no_telepon" placeholder="No. Telepon" inputmode="numeric" value="{{ old('no_telepon')}}">
                @error('no_telepon')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
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
                <label for="password" class="form-label fs-6 mb-1">Buat Password</label>
                <div class="input-group">
                    <input type="password" name="password" class="form-control border border-black border-end-0 @error('password') 
                    border_awal @enderror" id="password" placeholder="Buat Password" value="{{ old('password')}}">
                    <button class="btn border-top border border-black border-bottom border-end border-start-0 @error('password') 
                    is-invalid border_awal @enderror" type="button" id="togglePassword">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
            </div>
            <div class="mb-3 mt-2 mx-3">
                <label for="alamat_lengkap" class="form-label fs-6 mb-1">Alamat Lengkap</label>
                <input type="text" name="alamat_lengkap" class="form-control mx-auto border border-black @error('alamat_lengkap') 
                is-invalid border_awal @enderror" id="alamat_lengkap" placeholder="Alamat Lengkap" value="{{ old('alamat_lengkap')}}">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="tombol d-grid col-11 mx-auto">
                <button type="submit" class="btn mt-2">Daftar</button>
            </div>
            </form>
            <div class="text-center mt-3">
                <p>Sudah punya akun? <a href="/login">Login</a></p>
            </div>
        </div>
    
    <script src="{{ asset('assets/js/register.js') }}"></script> 
@endsection