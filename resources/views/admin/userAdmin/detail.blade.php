@extends('layouts.sidebarAdmin')

@section('content')
<div class="row mt-4">
        <table class="table table-striped" style="width:100%" border="1px solid black">
            <thead>
                <tr>
                    <th data-priority="1" class="text-center col-1">Nama</th>
                    <th data-priority="1" class="text-center col-1">Username</th>
                    <th data-priority="1" class="text-center col-1">No Telepon</th>
                    <th data-priority="1" class="text-center col-1">Email</th>
                    <th data-priority="1" class="text-center col-1">Alamat Lengkap</th>
                    <th data-priority="1" class="text-center col-1">Dibuat Tanggal</th>
                    <th data-priority="1" class="text-center col-1">Diupdate Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">{{ $user->nama }}</td>
                    <td class="text-center">{{ $user->username }}</td>
                    <td class="text-center">{{ $user->no_telepon }}</td>
                    <td class="text-center">{{ $user->email }}</td>
                    <td class="text-center">{{ $user->alamat_lengkap }}</td>
                    <td class="text-center">{{ $user->created_at }}</td>
                    <td class="text-center">{{ $user->updated_at }}</td>
                </tr>
            </tbody>
        </table>
@endsection