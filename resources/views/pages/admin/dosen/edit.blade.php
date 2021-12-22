@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Dosen {{$item->namadosen }}</h1>
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
            <form action="{{route('dosen.update', $item->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="namadosen">Nama Dosen</label>
                    <input type="text" class="form-control" name="namadosen" placeholder="Nama Dosen"
                        value="{{$item->namadosen}}">
                </div>
                <div class="form-group">
                    <label for="tanggallahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggallahir" placeholder="Tanggal Lahir"
                        value="{{$item->tanggallahir}}">
                </div>
                <div class="form-group">
                    <label for="tempatlahir">Tempat Lahir</label>
                    <input name="tempatlahir" class="form-control" placeholder="Tempat Lahir"
                        value="{{$item->tempatlahir}}">
                </div>
                <div class="form-group">
                    <label for="programstudi">Program Studi</label>
                    <input type="text" class="form-control" name="programstudi" placeholder="Program Studi"
                        value="{{$item->programstudi}}">
                </div>
                <div class="form-group">
                    <label for="fakultas">Fakultas</label>
                    <input type="text" class="form-control" name="fakultas" placeholder="Fakultas"
                        value="{{$item->fakultas}}">
                </div>
                <div class="form-group">
                    <label for="alamatrumah">Alamat Rumah</label>
                    <input type="text" class="form-control" name="alamatrumah" placeholder="Alamat Rumah"
                        value="{{$item->alamatrumah}}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Ubah
                </button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
