@extends('layouts.bimbingan')

@section('title', 'Form Bimbingan')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
        <h1 class="h3 mb-0 text-gray-800">Form pengajuan bimbingan</h1>
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

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('bimbingan.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Nim</label>
                    <input type="text" class="form-control" name="nim" placeholder="Nim">
                </div>
                <div class="form-group">
                    <label>ID Dosen</label>
                    <input type="text" class="form-control" name="iddosen" placeholder="ID Dosen" />
                </div>
                <div class="form-group">
                    <label>Uraian Bimbingan</label>
                    <input type="text" class="form-control" name="uraianbimbingan" placeholder="Uraian Bimbingan">
                </div>
                <div class="form-group">
                    <label for="jenisbimbingan">Jenis Bimbingan</label>
                    <select name="jenisbimbingan" required class="form-control">
                        <option hidden>Silahkan Pilih Divisi Anda</option>
                        <option value="kp">Bimbingan KP</option>
                        <option value="skripsi">skripsi</option>
                        <option value="krs">krs</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Bimbingan</label>
                    <input type="date" class="form-control" name="tanggalbimbingan" placeholder="Tanggal Bimbingan">
                </div>
                <div class="form-group">
                    <label for="statusbimbingan">Status Bimbingan</label>
                    <select name="statusbimbingan" required class="form-control">
                        <option hidden>Status</option>
                        <option value="ada">Ada</option>
                        <option value="belumada">Belum ada</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
