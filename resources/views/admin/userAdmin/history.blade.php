@extends('layouts.sidebarAdmin')

@section('content')
<div class="row mt-4">
<table id="example" class="table table-striped table-responsive" style="width:100%" border="1px solid black">
    @foreach ($users as $no => $user)
        <thead>
            <tr>
                <th data-priority="1" class="text-center col-1">No</th>
                <th data-priority="1" class="text-center col-2">Nama</th>
                <th data-priority="1" class="text-center col-2">Username</th>
                <th data-priority="1" class="text-center col-2">Email</th>
                <th class="text-center col-2">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">{{ ++$no }}</td>
                <td class="text-center">{{ $user->nama }}</td>
                <td class="text-center">{{ $user->username }}</td>
                <td class="text-center">{{ $user->email }}</td>
                <td class="text-center">
                    <form onsubmit="return confirm('Apakah Anda yakin ingin memulihkan user ini?');" action="{{ route('userAdmin.recover', $user->slug_link) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-trash-restore"></i> Restore</button>
                    </form>
                    <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus user ini secara permanen?');" action="{{ route('userAdmin.destroy', $user->slug_link) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash fa-lg"></i> Delete Permanently</button>
                    </form>
                </td>
            </tr>
        </tbody>
</table>
</div>
    @endforeach

@endsection