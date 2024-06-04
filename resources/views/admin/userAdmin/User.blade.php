@extends('layouts.sidebarAdmin')

@section('content')
<h2 class="ms-3">List User</h2>
<div class="row mt-4">
        @csrf
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-trash fa-lg"></i>history</button>
    </form>

    <table id="example" class="table table-striped table-responsive" style="width:100%" border="1px solid black">
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
            @foreach ($users as $no => $user)
            <tr>
                <td class="text-center">{{ ++$no }}</td>
                <td class="text-center">{{ $user->nama }}</td>
                <td class="text-center">{{ $user->username }}</td>
                <td class="text-center">{{ $user->email }}</td>
                <td class="text-center">
                    <form action="{{ route('userAdmin.show', $user->slug_link) }}" method="GET" class="d-inline">
                        <button class="btn btn-success"><i class="bi bi-clipboard2-data"></i> Detail</button>
                    </form>
                    <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus user ini?');" action="{{ route('userAdmin.softdelete', $user->slug_link) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-warning"><i class="fa-solid fa-trash fa-lg"></i>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
