@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bimbingan</h1>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>NIM</td>
                            <td>Id Dosen</td>
                            <td>Uraian Bimbingan</td>
                            <td>Jenis Bimbingan</td>
                            <td>Tanggal Bimbingan</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nim }}</td>
                            <td>{{ $item->iddosen }}</td>
                            <td>{{$item->uraianbimbingan}}</td>
                            <td>{{$item->jenisbimbingan}}</td>
                            <td>{{$item->tanggalbimbingan}}</td>
                            <td>{{$item->statusbimbingan}}</td>
                            <td>
                                <a href="{{route('bimbingan.show', $item->id)}}" class="btn btn-primary">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <form action="{{route('bimbingan.destroy', $item->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Data Kosong
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
