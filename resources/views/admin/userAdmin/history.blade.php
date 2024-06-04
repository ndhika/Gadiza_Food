@extends('layouts.sidebarAdmin')
@section('content')
<table id="example" class="table table-striped table-responsive" style="width:100%" border="1px solid black">
    @foreach ($indexHistory as $no => $user)
            <tr>
                <td class="text-center">{{ ++$no }}</td>
                <td class="text-center">{{ $user->nama }}</td>
                <td class="text-center">{{ $user->username }}</td>
                <td class="text-center">{{ $user->email }}</td>
                <td class="text-center">
                    <form onsubmit="return confirm('Apakah Anda yakin ingin memulihkan user ini?');" action="{{ route('userAdmin.restore', $user->slug_link) }}" method="POST" class="d-inline">
                        @csrf
                        @method('POST')
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-trash-restore"></i> Restore</button>
                    </form>
                    <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus user ini secara permanen?');" action="{{ route('userAdmin.forceDelete', $user->slug_link) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash fa-lg"></i> Delete Permanently</button>
                    </form>
                </td>
            </tr>
</table>
    @endforeach
@endsection