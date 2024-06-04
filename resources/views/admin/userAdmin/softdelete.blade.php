@extends('layouts.sidebarAdmin')

@section('content')
    <h2 class="ms-3">Soft Deleted Users</h2>
    <div class="row mt-4">
        <table id="example" class="table table-striped table-responsive" style="width:100%" border="1px solid black">
            <thead>
                <tr>
                    <th data-priority="1" class="text-center col-1">No</th>
                    <th data-priority="1" class="text-center col-2">Nama</th>
                    <th data-priority="1" class="text-center col-2">Username</th>
                    <th data-priority="1" class="text-center col-2">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($softDeletedUsers as $no => $user)
                <tr>
                    <td class="text-center">{{ ++$no }}</td>
                    <td class="text-center">{{ $user->nama }}</td>
                    <td class="text-center">{{ $user->username }}</td>
                    <td class="text-center">{{ $user->email }}</td>
                    <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus user ini secara permanen?');" action="{{ route('userAdmin.destroy', $user->slug_link) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash fa-lg"></i>Permanently Delete</button>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
