@extends('layouts.sidebarAdmin')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit User</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('profileAdmin.update', $profile->slug_link) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{ $profile->nama }}">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" value="{{ $profile->username }}">
                            </div>
                            <div class="form-group">
                                <label for="no_telepon">No Telepon</label>
                                <input type="text" name="no_telepon" class="form-control" value="{{ $profile->no_telepon }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $profile->email }}">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="alamat_lengkap">Alamat Lengkap</label>
                                <textarea name="alamat_lengkap" class="form-control">{{ $profile->alamat_lengkap }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input type="file" name="photo" class="form-control-file">
                                @if ($profile->photo)
                                    <img src="{{ asset($profile->photo) }}" alt="Profile Image" style="max-width: 100px; max-height: 100px; margin-top: 10px;">
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Update User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection