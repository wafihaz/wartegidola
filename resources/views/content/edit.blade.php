@extends('layout.master')

@section('title','Edit')

@section('content')
    <form action="{{route('update', $data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{$data->nama}}">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" name="harga" value="{{$data->harga}}">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" value="{{$data->deskripsi}}">
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Gambar</label>
            <input type="file" name="foto">
            <input type="hidden" name="foto" value="{{ $data->foto }}">
        </div>
        <br>
        <a href="{{ route('index') }}" class="btn btn-danger">back</a>
        <input type="hidden" name="hidden_id" value="{{ $data->id }}">
        <button type="submit" class="btn btn-success mx-2">Save</button>
    </form>
@endsection