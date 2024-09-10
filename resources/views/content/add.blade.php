@extends('layout.master')

@section('title','Home')

@section('content')
    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-3">
            <div class="form-group">
                <strong>Nama</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama Menu" value="{{old('nama')}}">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <strong>Harga</strong>
                <input type="text" name="harga" class="form-control" placeholder="Harga" value="{{old('harga')}}">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <strong>Deskripsi</strong>
                <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" value="{{old('deskripsi')}}">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <strong>Gambar</strong>
                <input type="file" name="foto" class="form-control" value="{{old('file')}}">
            </div>
        </div>
        <br>
        <a href="{{ route('index') }}" class="btn btn-danger">back</a>
        <button type="submit" class="btn btn-success mx-2 ">Save</button>
    </form>
@endsection