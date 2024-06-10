@extends('layouts.sidebarAdmin')

@section('content')
    <div class="container">
        <h2>Deleted Menus</h2>

        @if (session('success'))
            <div class="alert alert-success mt-2">
                {{ session('success') }}
            </div>
        @endif

        @if (count($menus) > 0)
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $menu)
                        <tr>
                            <td><img src="/storage/img/{{ $menu->image }}" alt="{{ $menu->name }}" width="100"></td>
                            <td>{{ $menu->name }}</td>
                            <td>{{ $menu->category }}</td>
                            <td>{{ $menu->price }}</td>
                            <td>
                                <form action="{{ route('menuAdmin.recover', $menu->slug_link) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-primary">Recover</button>
                                </form>
                                <form action="{{ route('menuAdmin.destroy', $menu->slug_link) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete Permanently</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No deleted menus found.</p>
        @endif
    </div>
@endsection
