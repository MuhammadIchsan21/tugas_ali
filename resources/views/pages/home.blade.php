@extends('layouts.app')

@section('title')
Bimbingan
@endsection

@section('content')
<!-- Header -->
<header class="text-center">
    <h1>
        Selamat Datang
        <br />
        di website bimbingan online
    </h1>
    <p class="mt-3">
        Bimbingan online
        <br />
        akan mempermudah kamu dalam menyelesaikan tugas
    </p>
    <a href="{{ route('login') }}" class="btn btn-get-started px-4 mt-4"> Mulai </a>
</header>

<!-- Main Content -->
<main>
    <section class="section-popular" id="popular">
        <div class="cotainer">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Daftar dosen</h2>
                    <p>sebuah daftar yang menampilkan data untuk dosen</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-popular-content" id="popular-content">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                @foreach ($items as $item)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}')">
                        <div class="travel-country">{{ $item->namadosen }}</div>
                        <div class="travel-location">{{ $item->programstudi }}</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('detail', $item->namadosen) }}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
