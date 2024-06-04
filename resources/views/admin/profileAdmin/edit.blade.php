@extends('layouts.sidebarAdmin')

@section('content')
<style>
    .form-group {
        margin-bottom: 15px;
    }
    .form-label {
        display: block;
        margin-bottom: 5px;
    }
    .form-control {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }
    .btn {
        margin-top: 10px;
    }
</style>

<div class="row">
    <div class="col-12">
        <h2>Edit User</h2>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <form action="{{ route('admin.profileAdmin.update', $user->id) }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="username" class="form-label">Username:</label>
                <input type="text" name="username" class="form-control" value="{{ $user->username }}">
                @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="phone" class="form-label">Phone:</label>
                <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
                @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="address" class="form-label">Address:</label>
                <input type="text" name="address" class="form-control" value="{{ $user->address }}">
                @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection