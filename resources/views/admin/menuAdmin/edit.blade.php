@extends('layouts.sidebarAdmin')

@section('content')
    <div class="container">
        <h1>Edit Menu</h1>

        @if (session('success'))
            <div class="alert alert-success mt-2">
                {{ session('success') }}
            </div>
        @endif

            <form method="POST" action="{{ route('menuAdmin.update', $menu->slug_link) }}" >
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $menu->name }}">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control">{{ $menu->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" id="price" class="form-control" value="{{ $menu->price }}">
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <select name="category" id="category" class="form-control">
                    <option value="Food" {{ $menu->category === 'Food' ? 'selected' : '' }}>Food</option>
                    <option value="Beverages" {{ $menu->category === 'Beverages' ? 'selected' : '' }}>Beverages</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update Menu</button>
        </form>
    </div>
@endsection
