@extends('layouts.sidebarAdmin')

@section('content')
    <h1>Create Menu</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('menuAdmin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ old('name') }}"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description">{{ old('description') }}</textarea><br>
        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price" value="{{ old('price') }}"><br>
        <label for="category">Category:</label><br>
        <select id="category" name="category">
            <option value="Food">Food</option>
            <option value="Beverages">Beverages</option>
        </select><br>
        <label for="image">Image:</label><br>
        <input type="file" id="image" name="image"><br><br>
        <button type="submit">Submit</button>
    </form>
@endsection
