@extends('layouts.sidebarAdmin')

@section('content')
<div class="container mt-4">
    <h2>Daftar Menu Admin</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-2">
            <form action="{{ route('MenuAdmin.create') }}" method="GET" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add Menu</button>
            </form>
    </div>

    <div class="mt-4">
        <table id="example" class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menuAdmins as $menuAdmin)
                    <tr>
                        <td class="text-center"><img src="{{ asset('storage/posts/' . $menuAdmin->image) }}" alt="{{ $menuAdmin->title }}" width="100"></td>
                        <td class="text-center">{{ $menuAdmin->title }}</td>
                        <td class="text-center">{{ $menuAdmin->content }}</td>
                        <td class="text-center">{{ number_format($menuAdmin->price, 0, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('MenuAdmin.edit', $menuAdmin->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('MenuAdmin.destroy', $menuAdmin->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
