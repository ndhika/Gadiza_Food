@extends('layouts.sidebarAdmin')

@section('content')
<div class="container mt-4">
    <h2>Daftar Menu Admin</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table id="example" class="table table-striped table-responsive" style="width:100%" border="1px solid black">
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
                    <td><img src="{{ asset('storage/posts/' . $menuAdmin->image) }}" alt="{{ $menuAdmin->title }}" width="100" class="img-fluid"></td>
                    <td>{{ $menuAdmin->title }}</td>
                    <td>{{ $menuAdmin->content }}</td>
                    <td>{{ number_format($menuAdmin->price, 0, ',', '.') }}</td>
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
@endsection
