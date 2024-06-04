@extends('layouts.sidebarAdmin')

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
            background-color: orangered;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>




<div class="row">
    <div class="col-12">
     <table id= "profile" class="table table-striped" widht="100%">
        <thead>
            <tr>
                <th data-priority="1">No</th>
                <th data-priority="1">Username</th>
                <th>No. telepon</th>
                <th>Alamat Lengkap</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($profile as $l)
            <tr>
                <td>
                    {{$l->id}}
                </td>
                <td>
                  {{$l->username}}
                </td>
                <td>
                    @if($l->update_at != null)
                        {{$l->update_at}}
                    @else()
                        {{$l->created_at}}
                    @endif()
                </td>
                <td>
                    @if($l->update_by != null)
                        {{$l->update_by}}
                    @else()
                        {{$l->created_by}}
                    @endif()
                        {{$l->deleted_by}}
                </td>
                <td>
                <a href="{{ route('latihan.index', $l->slug_link) }}" class="btn btn-info"><i class="bi bi-table"></i></a>
                <a href="{{ route('latihan.edit', $l->slug_link) }}"class="btn btn-success"><i class="bi bi-table"></i></a>
                <a href="{{ route('latihan.hapus', $l->slug_link) }}" class="btn btn-danger"><i class="bi bi-table"></i></a>
            
            </td>
            </tr>
         @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>1</th>
                <th>najwavaniaa</th>
                <th>081326096375</th>
                <th>Jl. Pandanaran1</th>
                <th>vaniap3najwa@gmail.com</th>
                <th>2024-04-04 11:27:00</th>
                <td>
                <a href="#" class="btn btn-info"><i class="bi bi-table"></i></a>
                <a href="#" class="btn btn-success"><i class="bi bi-table"></i></a>
                <a href="" class="btn btn-danger"><i class="bi bi-table"></i></a>
            
            </td>
            </tr>
        </tfoot>
     </table>
    </div>
</div>
@endsection