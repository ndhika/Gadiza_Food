@extends('layouts.profile')

@section('content')
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <a class="nav-link" href="{{ route('profile.show', ['id' => $user->id]) }}"><i class="bi bi-arrow-left-short"></i></a>
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25">
                                    <form method="POST" action="{{ route('ubahFoto') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="photo">Foto Profil Baru</label>
                                            <input type="file" name="photo" class="form-control-file" id="photo">
                                        </div>
                                    <h6 class="f-w-600">{{ $user->username }}</h6>
                                    <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Informasi</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Username</p>
                                        <h6 class="text-muted f-w-400">{{ $user->username }}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">No. Telepon</p>
                                        <h6 class="text-muted f-w-400">{{ $user->no_telepon }}</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Alamat</p>
                                        <h6 class="text-muted f-w-400">{{ $user->alamat_lengkap }}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-700">{{ $user->email }}</h6>
                                    </div>
                                </div>
                                <div>
                                    <a href="{{ route('profile.edit', ['id' => $user->id]) }}" class="btn btn-dark">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
