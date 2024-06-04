@extends('layouts.sidebarAdmin')

@section('content')

    <h2 class="ms-3">List User</h2>
    <div class="row mt-4">

        <div class="mb-2">
            <form action="{{ route('userAdmin.create') }}" method="GET" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add User</button>
            </form>
        <form action="{{ route('userAdmin.history') }}" method="GET" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-trash fa-lg"></i>History</button>
        </form>
        </div>

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
                @if ($user->status_aktif == 'Aktif')   
                <tr>
                    <td class="text-center">{{ ++$no }}</td>
                    <td class="text-center">{{ $user->nama }}</td>
                    <td class="text-center">{{ $user->username }}</td>
                    <td class="text-center">{{ $user->email }}</td>
                    <td class="text-center">
                    <form action="{{ route('userAdmin.show', $user->slug_link) }}" method="GET" class="d-inline">
                            @csrf
                            <button class="btn btn-success"><i class="bi bi-clipboard2-data"></i> Detail</button>
                    </form>
                    <form action="{{ route('userAdmin.edit', $user->slug_link) }}" method="GET" class="d-inline">
                            @csrf
                            <button class="btn btn-primary"><i class="fa-solid fa-pencil-alt"></i> Edit</button>
                    </form>
                    <form action="{{ route('userAdmin.softdelete', $user->slug_link) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-warning"><i class="fa-solid fa-trash fa-lg"></i>Delete</button>
                        </form>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
