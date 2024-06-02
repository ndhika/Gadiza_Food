@extends('layouts.profile')
@section('content')
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        @if (session('success'))
                        <div>{{ session('success') }}</div>
                        @endif
                        <a class="nav-link" href="{{ route('profile.show', ['id' => $user->id]) }}"><i class="bi bi-arrow-left-short"></i></a>
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25">
                                    <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius">
                                </div>
                                <div class="small font-italic text-muted mb-4">JPG atau PNG tidak lebih dari 5 mb</div>
                                <button class="btn btn-primary" type="button">Unggah gambar baru</button>
                                <h6 class="f-w-600">{{ $user->username }}</h6>
                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Informasi</h6>
                                <form action="{{ route('profile.update', $user->id) }}" method="POST">
                                    @csrf
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
                                           
