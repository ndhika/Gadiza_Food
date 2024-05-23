@extends('layouts.sidebarAdmin')
@include('layouts.laporanAdmin')
@section('content')
<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>





<h2>Admin Table</h2>

    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>No. telepon</th>
                <th>Alamat lengkap</th>
                <th>Email</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>najwavania</td>
                <td>081326096375</td>
                <td>Jl.Sekayu</td>
                <td>vanianajwa@gmail.com</td>
                <td>21/05/24 10.07</td>
                <td>21/05/24 10.09</td>
                <td>
                <a href="" class="btn btn-info"><i class="bi bi-eyedropper"></i></a>
                <a href="" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                </td>
            </tr>
            <!-- Tambahkan baris lain sesuai dengan data yang Anda miliki -->
        </tbody>
    </table>
@endsection


