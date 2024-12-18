@extends('master.layout')

@section('title', 'Home')

@section('content')
<div class="container" style="padding-top: 70px;">
   
    <div class="row">
        <div class="col-md-12">
            <!-- Pesan sukses -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Pesan error -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h2 class="text-center">Welcome To Trift Website</h2>
        </div>
    </div>

    <!-- Carousel -->
    <div class="container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('data_gambar/slide1.jpeg') }}" class="d-block w-100 carousel-img" alt="Gambar 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('data_gambar/slide2.jpeg') }}" class="d-block w-100 carousel-img" alt="Gambar 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('data_gambar/slide5.jpg') }}" class="d-block w-100 carousel-img" alt="Gambar 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- CSS Kustom untuk Carousel -->
<style>
    /* Atur ketinggian dan proporsi gambar carousel */
    .carousel-image {
        height: 700px; /* Atur tinggi gambar sesuai kebutuhan */
        object-fit: cover; /* Menjaga proporsi gambar agar tidak terdistorsi */
    }

    /* Pastikan gambar carousel tidak melewati lebar layar */
    .carousel-inner {
        max-height: 575px; /* Sesuaikan dengan tinggi gambar */
    }
</style>


    <!-- Kerja Sama Section -->
    <div class="row text-center my-5">
        <div class="col-md-12">
            <h4 class="font-weight-bold">Kerja Sama</h4>
            <p>Temukan peluang kerja sama yang menarik bersama kami.</p>
        </div>
    </div>

    <!-- 3 Card untuk Kerja Sama -->
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow" style="border: 2px solid #000;">
                <img src="{{ asset('data_gambar/SMK_PGRI.png') }}" class="card-img-top" alt="Kerja Sama 1">
                <div class="card-body">
                    <h5 class="card-title">SMK PGI 2 PONOROGO</h5>
                    <p class="card-text">Kami bekerja sama dengan SMK PGRI 2 PONOROGO. Hubungi kami untuk informasi lebih lanjut.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow" style="border: 2px solid #000;">
                <img src="{{ asset('data_gambar/PT_AGIT.png') }}" class="card-img-top" alt="Kerja Sama 2">
                <div class="card-body">
                    <h5 class="card-title">PT AGIT</h5>
                    <p class="card-text">Jika Anda tertarik bekerja sama dalam distribusi produk dan pengembangan website,kami juga menawarkan keuntungan .</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow" style="border: 2px solid #000;">
                <img src="{{ asset('data_gambar/PT_ASN.png') }}" class="card-img-top" alt="Kerja Sama 3">
                <div class="card-body">
                    <h5 class="card-title">PT ASN</h5>
                    <p class="card-text">Kami mencari mitra bisnis untuk memperluas jaringan penjualan produk kami dan peluang pasar yang luas.</p>
                </div>
            </div>
        </div>
    </div>

<!-- Keunggulan Website Toko Online -->
<div class="row my-5">
    <!-- Kolom untuk teks keunggulan -->
    <div class="col-md-6">
        <h3 class="text-center mb-4">Keunggulan Website Trift Kami</h3>
        <ul class="list-unstyled">
            <li><strong>Produk Barang Berkualitas</strong>: Trift Market menawarkan produk unggulan dari berbagai kategori, hanya yang terbaik untuk Anda.</li>
            <li><strong>Pengalaman Belanja Menyenangkan</strong>:Desain website kami mudah dinavigasi dan responsif, memberikan pengalaman belanja yang lancar dan menyenangkan.</li>
            <li><strong>Keamanan Transaksi Terjamin</strong>: Belanja dengan tenang! Sistem enkripsi canggih memastikan transaksi Anda aman setiap saat</li>
            <li><strong>Pengiriman Satset</strong>: Kami bekerja dengan pengiriman yang efisien untuk memastikan barang sampai ke tangan Anda tepat waktu.</li>
            <li><strong>Layanan Pelanggan Profesional</strong>: Tim layanan pelanggan kami siap memberikan bantuan dengan respons cepat dan solusi yang ramah.

</li>
        </ul>
    </div>

    <!-- Kolom untuk gambar keunggulan -->
    <div class="col-md-6">
        <img src="{{ asset('data_gambar/baner1.jpg') }}" class="img-fluid rounded shadow" alt="Keunggulan Toko Online" style="height: 400px; object-fit: cover;">
    </div>
</div>

            <!-- Tombol Baca Selengkapnya -->
            <div class="text-right mt-4">
                <a href="{{ route('about') }}" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
        </div>


 <!-- Mengapa Memilih Website Toko Online Kami -->
 <div class="container">
 <div class="row my-5">
    <div class="col-md-12 text-center">
        <h3 class="font-weight-bold">Mengapa Harus ?</h3>
        <p>Alasan kenapa harus belanja di Trift Website.</p>
    </div>
</div>

<!-- Ikon dan Alasan -->
<div class="row text-center">
    <div class="col-md-4 mb-4">
        <div class="icon-box">
            <i class="bi bi-building-fill-lock" style="font-size: 50px; color: #d9534f;"></i>
            <h5 class="mt-3">Kualitas Produk Terjamin</h5>
            <p>Jaminan kualitas dan kemanan produk terjamin hingga ke konsumen.</p>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="icon-box">
            <i class="bi bi-truck-front" style="font-size: 50px; color: #5bc0de;"></i>
            <h5 class="mt-3">Pengiriman Tepat Waktu</h5>
            <p>Jaminan tepat waktu pengiriman hingga ke konsumen dengan ongkir terjangkau.</p>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="icon-box">
            <i class="bi bi-person-circle" style="font-size: 50px; color: #28a745;"></i>
            <h5 class="mt-3">Pelayanan Hebat</h5>
            <p>Pengalaman & pelayanan hebat untuk konsumen yang hebat pula.</p>
        </div>
    </div>
</div>
<style>
    .icon-box {
    padding: 30px;
    border: 2px solid #f0f0f0;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.icon-box i {
    font-size: 50px;
    margin-bottom: 20px;
}

.icon-box h5 {
    font-size: 18px;
    font-weight: bold;
}

.icon-box p {
    font-size: 14px;
    color: #555;
}


</style>  


<div class="container mt-5">
    <!-- Judul -->
    <div class="row mb-4 text-center">
        <div class="col-md-12">
            <h2 class="section-title">Produk yang Kami Jual</h2>
            <p class="section-description">Temukan berbagai produk kecemu disini.</p>
        </div>
    </div>

    <!-- Grid Produk -->
    <div class="row">
        <!-- Card Produk -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="data_gambar/uniqlo.jpg" class="card-img-top" alt="Produk 1">
                <div class="card-body">
                    <h5 class="card-title">Jaket Uniqlo</h5>
                    <p class="card-text">Tracktop uniqlo,produk trift terbaru barang kualitas pemakaian masi 2x segera dapatkan barang terbaru kami.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="data_gambar/airmax.jpg" class="card-img-top" alt="Produk 2">
                <div class="card-body">
                    <h5 class="card-title">Nike air max</h5>
                    <p class="card-text">Sepatu nike membuat tampilanmu semakin kece dan menarik bahan bagus dan original sze 43.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="data_gambar/nikeairmax.png" class="card-img-top" alt="Produk 3">
                <div class="card-body">
                    <h5 class="card-title">Nike Air Max</h5>
                    <p class="card-text">Jadikan tampilanmu menjadi starboy yang menyala dimalam hari,barang pasti dijamin original sze44.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="data_gambar/tas.jpeg" class="card-img-top" alt="Produk 4">
                <div class="card-body">
                    <h5 class="card-title">Tas Nike</h5>
                    <p class="card-text">Tas yang membuat perjalanmu semakin dipermudah dengan ini kamu bisa membawa barang-barang yang kamu perlukan. </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="data_gambar/trift.jpg" class="card-img-top" alt="Produk 5">
                <div class="card-body">
                    <h5 class="card-title">Treafting market offline</h5>
                    <p class="card-text">Sudah tersedia offline market di Ponorogo.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="data_gambar/sale.jpg" class="card-img-top" alt="Produk 6">
                <div class="card-body">
                    <h5 class="card-title">flash sale muarah meriah</h5>
                    <p class="card-text">Ingin tampil kece tapi budget pas-pasan nah disini cukup pantengin website kami pasti ada selalu promo.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="data_gambar/hat.jpg" class="card-img-top" alt="Produk 7">
                <div class="card-body">
                    <h5 class="card-title">Topi Mumbul</h5>
                    <p class="card-text">Temukan topi untuk melengkapi outfit kecemu dan pastinya piliohanya banyak.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="data_gambar/clana.jpg" class="card-img-top" alt="Produk 8">
                <div class="card-body">
                    <h5 class="card-title">Celana Kombor dan Sweeter</h5>
                    <p class="card-text">Atasanmu skena? tapi bawahan mu belum kombor? beli sekarang dan checkout segera dan dapatkan banyak pilihanya.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
        height: 350px;
        object-fit: cover;
    }

    .card-title {
        font-size: 18px;
        font-weight: bold;
    }

    .card-text {
        font-size: 14px;
        color: #555;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>


<!-- Informasi Harga -->
<div class="row mt-5">
    <div class="col-md-12 text-center">
        <h4>Informasi Harga</h4>
        <p>Untuk informasi lebih lanjut tentang harga produk, silakan hubungi kami melalui WhatsApp:</p>
        <a href="https://wa.me/6282228164310" class="btn btn-success btn-wa" target="_blank">
            <i class="fab fa-whatsapp"></i> Hubungi Kami
        </a>
    </div>
</div>

<!-- Styling -->
<style>
    .btn-wa {
        background-color: #25d366;
        color: white;
        font-size: 16px;
        padding: 10px 20px;
        border-radius: 5px;
        display: inline-flex;
        align-items: center;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn-wa:hover {
        background-color: #1c9c50;
        color: white;
    }

    .btn-wa i {
        margin-right: 10px;
    }
</style>




 <!-- Daftar Postingan Terbaru -->
<div class="row">
    <div class="col-md-12 text-center my-4">
        <h4>Daftar Postingan Terbaru</h4>
    </div>
</div>

<!-- Daftar Post -->
<div class="row mt-4">
    @forelse ($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <!-- Gambar Post -->
                @if ($post->image)
                    <img src="{{ asset('images/posts/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                @else
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Placeholder Image">
                @endif

                <div class="card-body d-flex flex-column">
                    <!-- Judul dan Ringkasan -->
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ Str::limit($post->body, 100) }}</p>
                    
                    <!-- Tombol Baca Selengkapnya -->
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-primary mt-auto">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-md-12">
            <p class="text-center">Tidak ada post yang tersedia saat ini.</p>
        </div>
    @endforelse
</div>


<!-- Styling -->
<style>
    .icon-box {
        padding: 30px;
        border: 2px solid #f0f0f0;
        border-radius: 10px;
        background-color: #fff;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .icon-box i {
        font-size: 50px;
        margin-bottom: 20px;
    }

    .icon-box h5 {
        font-size: 18px;
        font-weight: bold;
    }

    .icon-box p {
        font-size: 14px;
        color: #555;
    }


</style>

</div>
<!-- Tambahkan lebih banyak kartu produk di sini -->
</div>
<footer class="bg-dark text-white p-5">
<div class="row">
<div class="col-md-3">
  <h5>LAYANAN PELANGGAN</h5>
<ul>
<li>Pusat Bantuan</li>
    <li>Cara Pembelian</li>
    <li>Pengiriman</li>
    <li>Complain pembelian</li>
</ul>
</div>
<div class="col-md-3">
  <h5>TENTANG KAMI</h5>
  <p>kami adalah platform belanja trifting barang branded yang terjamin kualitasnya dijamin original.
</div>
<div class="col-md-3">
  <h5>MITRA KERJASAMA</h5>
<ul>
  <li>SMK PGRI 2 PONOROGO</li>
  <li>PT AGIT</li>
  <li>Tiktok</li>
</ul>
</div>
<div class="col-md-3">
  <h5>HUBUNGI KAMI</h5>
<ul>
  <li>088228293505</li>
  <li>triftingmarket11@gmail.com</li>
</ul>
</div>
</div>
</footer>
<div class="copyright text-center bg-white font-weight-bold p-2 bg-info">
<p>Copyright <i class="far fa-copyright"></i>2024 by Herdi Winarno</p>
</div>

@endsection
