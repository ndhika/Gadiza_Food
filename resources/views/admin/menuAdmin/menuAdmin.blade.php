<!-- resources/views/admin/menuAdmin/index.blade.php -->
@extends('layouts.sidebarAdmin')

@section('content')
    <div class="container">
        <h1>Menu List</h1>
        <a href="{{ route('menuAdmin.create') }}" class="btn btn-primary">Add New Menu</a>

        @if (session('success'))
            <div class="alert alert-success mt-2">
                {{ session('success') }}
            </div>
        @endif

        <table class="table mt-3">
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
                @foreach ($menus as $menu)
                    <tr>
                        <td><img src="{{ asset('storage/images/' . $menu->image) }}" alt="{{ $menu->title }}" width="100"></td>
                        <td>{{ $menu->title }}</td>
                        <td>{{ $menu->content }}</td>
                        <td>{{ $menu->price }}</td>
                        <td>
                            <a href="{{ route('menuAdmin.edit', $menu) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('menuAdmin.destroy', $menu) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this menu?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
