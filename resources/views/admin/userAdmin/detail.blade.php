@extends('layouts.sidebarAdmin')

@section('content')
<div class="row mt-4 justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header text-center">
                <h4>Detail Pengguna</h4>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-4 text-right font-weight-bold">Nama:</div>
                    <div class="col-md-8">{{ $user->nama }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 text-right font-weight-bold">Username:</div>
                    <div class="col-md-8">{{ $user->username }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 text-right font-weight-bold">No Telepon:</div>
                    <div class="col-md-8">{{ $user->no_telepon }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 text-right font-weight-bold">Email:</div>
                    <div class="col-md-8">{{ $user->email }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 text-right font-weight-bold">Alamat Lengkap:</div>
                    <div class="col-md-8">{{ $user->alamat_lengkap }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 text-right font-weight-bold">Dibuat Tanggal:</div>
                    <div class="col-md-8">{{ $user->created_at }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 text-right font-weight-bold">Diupdate Tanggal:</div>
                    <div class="col-md-8">{{ $user->updated_at }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection