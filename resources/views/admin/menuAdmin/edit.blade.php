@extends('layouts.sidebarAdmin')

@section('content')
    <div class="container">
        <h1>Edit Menu</h1>
        <form action="{{ route('MenuAdmin.update', $menuAdmin->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                <img src="{{ asset('storage/posts/' . $menuAdmin->image) }}" alt="{{ $menuAdmin->title }}" width="100">
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $menuAdmin->title }}" required>
            </div>
            <div class="form-group">
                <label for="content">Description</label>
                <textarea class="form-control" id="content" name="content" rows="3" required>{{ $menuAdmin->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $menuAdmin->price }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
