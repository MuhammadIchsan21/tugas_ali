@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Bimbingan {{$item->nim }}</h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="csrd shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{$item->id}}</td>
                </tr>
                <tr>
                    <th>Nim</th>
                    <td>{{$item->nim}}</td>
                </tr>
                <tr>
                    <th>Id Dosen</th>
                    <td>{{$item->iddosen}}</td>
                </tr>
                <tr>
                    <th>Uraian Bimbingan</th>
                    <td>${{$item->uraianbimbingan}}</td>
                </tr>
                <tr>
                    <th>Jenis Bimbingan</th>
                    <td>${{$item->jenisbimbingan}}</td>
                </tr>
                <tr>
                    <th>Tanggal Bimbingan</th>
                    <td>{{$item->tanggalbimbingan}}</td>
                </tr>
                <tr>
                    <th>Status Bimbingan</th>
                    <td>{{$item->statusbimbingan}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
