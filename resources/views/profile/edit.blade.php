@extends('layouts.profile')
@section('content')
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-8 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        @if (session('success'))
                            <div>{{ session('success') }}</div>
                        @endif
                        <a class="nav-link" href="{{ route('profile.show', ['id' => $user->id]) }}"></a>
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25">
                                    <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                            <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                </div>
                                <div class="form-group">
                                    @if(Auth::user()->photo)
                                        <img src="{{ Storage::url('public/photos/' . Auth::user()->photo) }}" alt="Profile Photo" width="100">
                                    @endif
                                </div>
                                <h6 class="f-w-600">
                                    <label for="nama">Nama:</label>
                                    <input type="text" name="nama" value="{{ old('nama', $user->nama) }}" required>
                                    @error('nama')
                                        <div>{{ $message }}</div>
                                    @enderror</h6>
                                <i class="mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Informasi</h6>
                                 <!-- Spoofing HTTP method -->
                                    <!-- Form fields -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="username">Username:</label>
                                            <input type="text" name="username" value="{{ old('username', $user->username) }}" required>
                                            @error('username')
                                                <div>{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="no_telepon">No. Telepon:</label>
                                            <input type="text" name="no_telepon" value="{{ old('no_telepon', $user->no_telepon) }}" required>
                                            @error('no_telepon')
                                                <div>{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="alamat_lengkap">Alamat:</label>
                                            <input type="text" name="alamat_lengkap" value="{{ old('alamat_lengkap', $user->alamat_lengkap) }}" required>
                                            @error('alamat_lengkap')
                                                <div>{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="email">Email:</label>
                                            <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
                                            @error('email')
                                                <div>{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success mt-3">Simpan</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
