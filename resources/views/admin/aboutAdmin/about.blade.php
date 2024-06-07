@extends('layouts.sidebarAdmin')
@section('content')
<style>
    table{
        width: 100%;
        border-collapse: collapse;
    }
    th, td{
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th{
        background-color: #5555;
    }
    tr:hover{
        background-color: #f5f5f5;
    }
</style>
<h2>Tentang Kami</h2>
<br>
<table>
    <thead>
        <tr>
            <th>Judul</th>
            <th>Konten</th>
            <th>Link Instagram</th>
            <th>Link Maps</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Gadiza Food's Website</td>
            <td>Merupakan platform website yang digunakan untuk memesan makanan dan minuman secara online. Ini membantu pengalaman berbelanja Anda menjadi lebih mudah dan praktis.</td>
            <td>https://www.instagram.com/gadiza.homemadefood?igsh=MTI4Y2gyN3hzN3lpNA==</td>
            <td>https://maps.app.goo.gl/pzrkVyRxca2v7xFGA</td>
            <td>
            
            <a href="" class="btn btn-success"><i class="bi bi-file-earmark-plus-fill"></i></a>
            <a href="" class="btn btn-primary"><i class="bi bi-eyedropper"></i></a>
            <a href="" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
            
            
            </td>
        </tr>
    </tbody>
</table>

@endsection