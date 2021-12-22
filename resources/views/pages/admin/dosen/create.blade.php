@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Daftar Dosen</h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="csrd shadow">
        <div class="card-body">
            <form action="{{ route('dosen.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="namadosen">Nama Dosen</label>
                    <input type="text" class="form-control" name="namadosen" placeholder="Nama Dosen"
                        value="{{old('namadosen')}}">
                </div>
                <div class="form-group">
                    <label for="tanggllahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggallahir" placeholder="Tanggal Lahir"
                        value="{{old('tanggallahir')}}">
                </div>
                <div class="form-group">
                    <label for="tempatlahir">Tempat Lahir</label>
                    <input type="text" name="tempatlahir" class="form-control" placeholder="Tempat Lahir"
                        value="{{old('tempatlahir')}}">
                </div>
                <div class="form-group">
                    <label for="tempatlahir">Program Studi</label>
                    <input type="text" class="form-control" name="programstudi" placeholder="programstudi"
                        value="{{old('programstudi')}}">
                </div>
                <div class="form-group">
                    <label for="fakultas">Fakultas</label>
                    <input type="text" class="form-control" name="fakultas" placeholder="Fakultas"
                        value="{{old('fakultas')}}">
                </div>
                <div class="form-group">
                    <label for="alamatrumah">Alamat Rumah</label>
                    <input type="text" class="form-control" name="alamatrumah" placeholder="Alamat Rumah"
                        value="{{old('alamatrumah')}}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
