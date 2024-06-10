@extends('layouts.profile')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-header bg-danger text-white">
                    <h4>{{ $profile->nama }}</h4>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="/storage/img/{{ $profile->photo }}" alt="User Avatar" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <div class="mt-3">
                        <p><strong>Username:</strong> {{ $profile->username }}</p>
                        <p><strong>Email:</strong> {{ $profile->email }}</p>
                        <p><strong>Nomer Telepon:</strong> {{ $profile->no_telepon }}</p>
                        <p><strong>Alamat:</strong> {{ $profile->alamat_lengkap }}</p>
                        <div class="text-center mt-4">
                            <a href="{{ route('profile.edit', $profile->slug_link) }}" class="btn btn-primary mr-2 w-50">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <a href="/" class="btn btn-secondary bg-danger">Back to Home</a>
        </div>
    </div>
</div>
@endsection
