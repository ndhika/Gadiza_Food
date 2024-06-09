@extends('layouts.sidebarAdmin')

@section('content')
<h2 class="ms-3">Profile Admin</h2>

<div class="row mt-4">
    <table id="example" class="table table-striped table-responsive" style="width:100%" border="1px solid black">
        <thead>
            <tr>
                <th data-priority="1" class="text-center col-1">No</th>
                <th data-priority="1" class="text-center col-2">Photo</th>
                <th data-priority="1" class="text-center col-2">Nama</th>
                <th data-priority="1" class="text-center col-2">Username</th>
                <th data-priority="1" class="text-center col-2">No. Telepon</th>
                <th data-priority="1" class="text-center col-2">Alamat Lengkap</th>
                <th data-priority="1" class="text-center col-2">Email</th>
                <th class="text-center col-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profile as $no => $user)
            <tr>
                <td class="text-center">{{ ++$no }}</td>
                <td><img src="/img/{{ $user->photo }}" alt="{{ $user->username }}" width="100"></td>
                <td class="text-center">{{ $user->nama }}</td>
                <td class="text-center">{{ $user->username }}</td>
                <td class="text-center">{{ $user->no_telepon }}</td>
                <td class="text-center">{{ $user->alamat_lengkap }}</td>
                <td class="text-center">{{ $user->email }}</td>
                <td class="text-center">
                <form action="{{ route('profileAdmin.edit', $user->slug_link) }}" method="GET" class="d-inline">
                    @csrf
                    <button class="btn btn-info"><i class="fa-solid fa-pencil-alt"></i> Edit</button>
                </form>
                <form action="{{ route('profileAdmin.softdelete', $user->slug_link) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-warning"><i class="fa-solid fa-trash fa-lg"></i>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
