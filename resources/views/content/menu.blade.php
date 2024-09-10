@extends('layout.master')

@section('title','Warung Makan Idola/Menu')
@section('menu','active')

@section('content')
@include('layout.navbar')
<main style="overflow:hidden; padding-top:60px">
    <p class="text-success fw-medium text-center pt-2 fst-italic" style="font-size:40px">MENU</p>
    <div class="row row-cols-1 row-cols-md-2 g-4 pt-2 pb-5 ps-5 pe-5">
        @foreach ($data as $no)
            <div class="col" style="z-index:-1">
                <div class="card">
                <img src="{{ asset('global/img/' . $no->foto) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-capitalize text-center">{{ $no->nama }}</h5>
                    <p class="card-text">{{ $no->deskripsi }}</p>
                </div>
                <div class="card-footer text-center">
                    <small class="text-body-secondary">Rp. {{ $no->harga }}</small>
                </div>
                </div>
            </div>
        @endforeach
    </div>
</main>
@include('layout.footer')
@endsection