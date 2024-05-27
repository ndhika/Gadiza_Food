@extends('layouts.sidebarAdmin')

@section('content')
<style>
body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
<a class="nav-link" href="http://127.0.0.1:8000/profile"><i class="bi bi-arrow-left-short"></i></a>
    <h2>Edit Admin table</h2>
    <form>
        <label for="name">Username:</label>
        <input type="text" id="username" name="username" value="najwavania">

        <label for="phone">No. Telepon:</label>
        <input type="number" id="phone" name="phone" value="0834962347">

        <label for="address">Alamat Lengkap:</label>
        <input type="text" id="address" name="address" value="Jl. Pandanaran">
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="vaniap3najwa@gmail.com">

        <button type="submit">Save Changes</button>
    </form>
@endsection