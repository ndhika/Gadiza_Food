@extends('layouts.profile')

@section('content')

<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-xl-8 col-md-12">
                                                <div class="card user-card-full">
                                                    <div class="row m-l-0 m-r-0">
                                                        <a class="nav-link" href="{{ route('profile.show',['id'=>$user->id]) }}"
                                                            <i class="bi bi-arrow-left-short"></i></a>
                                                        <div class="col-sm-4 bg-c-lite-green user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <div class="m-b-25">
                                                                    <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                                                </div>
                                                                {{ auth()->user()->nama }}
                                                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card-block">
                                                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <label class="m-b-10 f-w-600" for="username">Username</label>
                                                                        <br>
                                                                    {{ auth()->user()->username }}

                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label class="m-b-10 f-w-600" for="no_telepon">No. Telepon</label>
                                                                        <br>
                                                                        {{ auth()->user()->no_telepon }}
    
                                                                    </div>
                                                                </div>
                                                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <label class="m-b-10 f-w-600" for="alamat_lengkap">Alamat Lengkap</label>
                                                                        <br>
                                                                        {{ auth()->user()->alamat_lengkap }}
    
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label class="m-b-10 f-w-600" for="email">Email</label>
                                                                        <br>
                                                                        {{ auth()->user()->email }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="{{ route('profile.edit',['id'=>$user->id]) }}" class="btn btn-light">Edit</a>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             </div>
                                                </div>
                                            </div>