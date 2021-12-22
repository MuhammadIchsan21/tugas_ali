@extends('layouts.app')
@section('title', 'Detail Bimbingan')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Dosen
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>{{$item->namadosen}}</h1>
                        <p>{{$item->programstudi}}</p>
                        @if ($item->galleries->count())
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{Storage::url($item->galleries->first()->image)}}" class="xzoom"
                                    id="xzoom-default" xoriginal="{{Storage::url($item->galleries->first()->image)}}" />
                            </div>
                            <div class="xzoom-thumbs">
                                @foreach ($item->galleries as $gallery)
                                <a href="{{Storage::url($gallery->image)}}">
                                    <img src="{{Storage::url($gallery->image)}}" class="xzoom-gallery" width="128"
                                        xpreview="{{Storage::url($gallery->image)}}" />
                                </a>
                                @endforeach

                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Informasi dosen</h2>
                        <hr />
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Tanggal Lahir</th>
                                <td width="50%" class="text-right">
                                    {{\Carbon\Carbon::create($item->tanggallahir)->format('F n, Y')}}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Program Studi</th>
                                <td width="50%" class="text-right">
                                    {{$item->programstudi}}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Fakultas</th>
                                <td width="50%" class="text-right">
                                    {{$item->fakultas}}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Alamat Rumah</th>
                                <td width="50%" class="text-right">
                                    {{$item->alamatrumah}}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        @auth
                        <form action="#" method="POST">
                            @csrf
                            <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                                Join Now
                            </button>
                        </form>
                        @endauth

                        @guest
                        <a href="{{route('login')}}" class="btn btn-block btn-join-now mt-3 py-2">
                            Login or Register to Join
                        </a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/xzoom/xzoom.css')}}" />
@endpush

@push('addon-script')
<script src="{{url ('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
<script>
    $(document).ready(function () {
                $(".xzoom, .xzoom-gallery").xzoom({
                    zoomWidth: 500,
                    title: false,
                    tint: "#333",
                    Xoffset: 15,
                });
            });

</script>
@endpush
