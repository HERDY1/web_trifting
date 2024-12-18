<!-- resources/views/about.blade.php -->

@extends('master.layout')

@section('title', 'Tentang Kami')

@section('content')

<!-- Halaman About -->
<div class="about-container">
    <div class="container" style="padding-top: 60px;">
        <!-- Header -->
        <div class="about-header text-center">
            <h2 class="text-black">Tentang Kami</h2>
            <p class="subtitle">Ayuk kenali website trifting kami</p>
        </div>

        <!-- Bagian Deskripsi -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <p>
                Trifting Website adalah platform belanja online yang menyediakan berbagai produk berkualitas untuk memenuhi kebutuhan Anda. Kami berkomitmen untuk memberikan pengalaman berbelanja yang mudah, aman, dan menyenangkan bagi setiap pelanggan.
                </p>
                <p>
                Kami menawarkan berbagai kategori produk seperti pakaian, sepatu, aksesoris, dan banyak lagi. Setiap produk yang kami jual dipilih dengan cermat dan diuji untuk memastikan kualitasnya. Kami juga bekerja sama dengan pemasok dan produsen terpercaya untuk memastikan harga yang kompetitif.
                </p>
                <p>
                Dengan sistem pengiriman yang cepat dan dukungan pelanggan yang responsif, kami berkomitmen untuk memberikan pelayanan terbaik kepada Anda.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="data_gambar/trift4.jpg" alt="Toko Online" class="img-fluid about-img">
            </div>
        </div>

        <!-- Bagian Visi & Misi -->
        <div class="about-content mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-black">Visi Kami</h3>
                    <p>Menjadi toko website online trifting yang memudahkan masyarakat mencari barang branded sesuai kebutuhan mereka.</p>
                </div>
                <div class="col-md-6">
                    <h3 class="text-black">Misi Kami</h3>
                    <ul>
                        <li>Menyediakan produk berkualitas dengan harga terbaik.</li>
                        <li>Memberikan pelayanan pelanggan yang cepat dan ramah.</li>
                        <li>Menjamin keamanan transaksi bagi pelanggan kami.</li>
                    </ul>
                </div>
            </div>
        </div>
        <style>
            /* Kontainer utama */
            .about-container {
                background: linear-gradient(135deg, #ffffff, #555);
                padding-bottom: 40px;
            }
            
            /* Header */
            .about-header h2 {
                font-size: 2.8rem;
                font-weight: bold;
                color: #007bff;
            }
            
            .about-header .subtitle {
                font-size: 1.2rem;
                color: #555;
                margin-top: 10px;
            }
            
            /* Konten */
            .about-container p {
                font-size: 1.2rem;
                color: #333;
                line-height: 1.8;
            }
            
            .about-content h3 {
                font-size: 1.8rem;
                color: #007bff;
                font-weight: bold;
                margin-bottom: 15px;
            }
            
            .about-content ul {
                list-style: none;
                padding: 0;
            }
            
            .about-content ul li {
                font-size: 1.1rem;
                margin-bottom: 10px;
                position: relative;
                padding-left: 20px;
            }
            
            .about-content ul li:before {
                content: "";
                position: absolute;
                left: 0;
                color: #000;
                font-size: 1.2rem;
                line-height: 1;
            }
            
            /* Gambar */
            .about-img {
                max-width: 100%;
                height: auto;
                border-radius: 10px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                margin-top: 20px;
            }
            
            
            /* Responsivitas */
            @media (max-width: 768px) {
                .about-header h2 {
                    font-size: 2.4rem;
                }
            
                .about-header .subtitle {
                    font-size: 1rem;
                }
            
                .about-content h3 {
                    font-size: 1.5rem;
                }
            }
            </style>
    </div>
</div>

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
<div class="copyright bg-white text-center font-weight-bold p-2 bg-info">
<p>Copyright <i class="far fa-copyright"></i>2024 by HERDI WINARNO</p>
</div>

@endsection


