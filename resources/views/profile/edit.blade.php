@extends('layouts.profile')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-header bg-primary text-white">
                    <h4>Edit Profile</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('profile.update', $profile->slug_link) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{ $profile->nama }}">
                        </div>

                        <div class="form-group">
                            <label for="photo">Photo:</label>
                            <input type="file" name="photo" id="photo" class="form-control-file">
                        </div>

                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" name="username" id="username" class="form-control" value="{{ $profile->username }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $profile->email }}">
                        </div>

                        <div class="form-group">
                            <label for="no_telepon">Nomer Telepon:</label>
                            <input type="text" name="no_telepon" id="no_telepon" class="form-control" value="{{ $profile->no_telepon }}">
                        </div>

                        <div class="form-group">
                            <label for="alamat_lengkap">Alamat:</label>
                            <textarea name="alamat_lengkap" id="alamat_lengkap" class="form-control">{{ $profile->alamat_lengkap }}</textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('profile.show', $profile->slug_link) }}" class="btn btn-secondary ml-2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
