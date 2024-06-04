@extends('layouts.menuAdmin')

@section('content')
    <div class="container">
        <h1>Menu Admin</h1>
        <a href="{{ route('MenuAdmin.create') }}" class="btn btn-primary">Add New Menu</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menuAdmins as $menuAdmin)
                    <tr>
                        <td><img src="{{ asset('storage/posts/' . $menuAdmin->image) }}" alt="{{ $menuAdmin->title }}" width="100"></td>
                        <td>{{ $menuAdmin->title }}</td>
                        <td>{{ $menuAdmin->content }}</td>
                        <td>{{ $menuAdmin->price }}</td>
                        <td>
                            <a href="{{ route('MenuAdmin.edit', $menuAdmin->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('MenuAdmin.destroy', $menuAdmin->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
