@extends('layouts.sidebarAdmin')

@section('content')
<div class="container">
    <h2>Deleted Menus</h2>
    @if (count($menus) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $menu->name }}</td>
                        <td>{{ $menu->description }}</td>
                        <td>{{ $menu->price }}</td>
                        <td>{{ $menu->category }}</td>
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
