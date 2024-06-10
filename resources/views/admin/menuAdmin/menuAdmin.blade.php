@extends('layouts.sidebarAdmin')

@section('content')
    <div class="container">
        <h1>Menu List</h1>

        <div class="mb-3">
            <a href="{{ route('menuAdmin.create') }}" class="btn btn-primary">Add New Menu</a>
            <a href="{{ route('menuAdmin.history') }}" class="btn btn-secondary">View History</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success mt-2">
                {{ session('success') }}
            </div>
        @endif

        @if (count($menus) > 0)
            <table id="example" class="table mt-3">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $menu)
                    @if ($menu->status_aktif == 'Aktif') 
                        <tr>
                            <td><img src="storage/img/{{ $menu->image }}" alt="{{ $menu->name }}" width="100"></td>
                            <td>{{ $menu->name }}</td>
                            <td>{{ $menu->category }}</td>
                            <td>{{ $menu->price }}</td>
                            <td>{{ $menu->description }}</td>
                            <td>
                                <a href="{{ route('menuAdmin.edit', $menu->slug_link) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('menuAdmin.softdelete', $menu->slug_link) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this menu?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No menus found.</p>
        @endif
    </div>
@endsection
