@extends('layout.master')

@section('title','Warung Makan Idola/admin')
@section('admin','active')

@section('content')
@include('layout.navbar')
<main style="overflow:hidden; padding-top:60px">
<div class="ps-4 pt-2">
    <span class="card-label fw-bold fs-3 mb-1">List Menu</span>
    <br>
    <a href="{{ route('create') }}" class="btn btn-success mb-3 float-start mt-4">Tambah Menu</a>
</div>
<table class="table">
        <thead>
            <th></th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Deskripsi</th>
        </thead>
        <tbody>


            @foreach ($data as $no )
                <td>
                    <img src="{{ asset('global/img/' . $no->foto) }}" width="50px" height="60px" class="rounded-corners" alt="" />
                    <td>{{ $no->nama }}</td>
                    <td>{{ $no->harga }}</td>
                    <td>{{ $no->deskripsi }}</td>
                    <td>
                        <form action="{{route('destroy',$no->id)}}" method="POST" onsubmit="return submitForm(this);">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('edit', $no->id) }}" class="btn btn-success btn-sm">Edit</a>
                            <button type="submit" value="Delete" class="btn btn-danger btn-sm" id="hps">Hapus</button>
                        </form>
                    </td>
                </tr>
                
            @endforeach


        </tbody>
    </table>
</main>
@endsection