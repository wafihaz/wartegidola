@extends('layout.master')

@section('title','Warung Makan Idola')
@section('home','active')

@section('content')
@include('layout.navbar')
<main style="overflow:hidden; padding-top:60px" id="home">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner bg-black" style="z-index:-1; height:650px">
                <div class="carousel-item active">
                    <img src="global/img/a.jpg" class="d-block w-100 opacity-50" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="global/img/b.jpg" class="d-block w-100 opacity-50" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="global/img/c.jpg" class="d-block w-100 opacity-50" alt="...">
                </div>
            </div>
        </div>
        <h1 class="position-absolute top-0 start-0 text-start text-white fw-bold fst-italic" style="padding-top:240px; padding-left:150px; z-index:-1; font-size:80px"> 
            WARUNG MAKAN
        </h1>
        <h1 class="position-absolute top-0 start-0 text-start text-white fw-bold fst-italic" style="padding-top:330px; padding-left:150px; z-index:-1; font-size:80px"> 
            IDOLA
        </h1>
        <p class="position-absolute top-0 start-0 text-start text-white" style="padding-top:450px; padding-left:150px; z-index:-1; font-size:30px">Rasakan kelezatan di setiap suap!</p>
        <hr class="border-4 border-success">
        <p class="text-success fw-medium text-center pt-1" style="font-size:40px">TENTANG KAMI</p>
    <div class="d-flex justify-content-sm-center" style="widht: 512px; padding-left: 300px; padding-right: 300px">
        <div class="d-flex  pt-2 pb-3 ps-5 pe-5">
            <img src="global/img/tentangkami.jpg" width="600" height="300" style="border:0;"></img>
            <div class="ps-4">
                <h3>Mengapa memilih kami?</h3>
                <p style="text-align: justify">Kami hadir dengan tujuan sederhana, memberikan pengalaman kuliner yang luar biasa. Warung Makan Idola adalah hasil dari impian kami untuk menjadi destinasi pilihan Anda, tempat di mana kelezatan dan keramahan saling bertemu</p>
            </div>
        </div>
    </div>


    <hr class="border-4 border-success" id="menu">
    <p class="text-success fw-medium text-center pt-1" style="font-size:40px">MENU KAMI</p>

    <div class="row row-cols-1 row-cols-md-3 g-4 pt-2">
    @foreach($data as $no)
        <div class="col" style="z-index:-3">
            <div class="card h-100">
                <img src="{{ asset('global/img/' . $no->foto) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-capitalize text-center">{{ $no->nama}}</h5>
                 <p class="card-text">{{ $no->deskripsi}}</p>
                </div>
            </div>
        </div>
    @endforeach
    </div>

<hr class="border-4 border-success" id="contact">
<p class="text-success fw-medium text-center pt-1" style="font-size:40px">KONTAK KAMI</p>
<div class="d-flex pt-2 pb-5 ps-5 pe-5">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d589.3553708865137!2d107.08144494478009!3d-6.4332679484203625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699794c9a9fc3d%3A0xe17ed9638012e1c2!2sJl.%20Taman%20Persada%20Raya%20No.3%2C%20Cibarusahkota%2C%20Kec.%20Cibarusah%2C%20Kabupaten%20Bekasi%2C%20Jawa%20Barat%2017340!5e0!3m2!1sid!2sid!4v1700911955272!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <form class="ps-5">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="name" class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" aria-describedby="emailHelp">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nomor HP</label>
            <input type="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Kirim Pesan</button>
    </form>
</div>
    
</main>
@include('layout.footer')
@endsection