@extends('master.layout')

@section('title')
    Contact Us
@endsection

@section('content')
<div class="contact-container" style="padding-top: 60px; padding-bottom: 40px;">
    <div class="container">
        <!-- Header -->
        <div class="text-center mb-5">
            <h2 class=" text-black section-title">Kontak Kami</h2>
            <p class="section-subtitle">Butuh bantuan? Kami ada untuk Anda! Jangan ragu untuk menghubungi kami.</p>
        </div>

        <!-- Konten Kontak -->
        <div class="row">
            <!-- Informasi Kontak -->
            <div class="col-md-6">
                <div class="contact-info">
                    <h4 class="text-black">Hubungi Kami</h4>
                    <p>
                    Apapun kebutuhan atau pertanyaan Anda, kami dengan senang hati membantu. Hubungi kami melalui:
                    </p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-envelope"></i> <strong>Email:</strong> <a href="mailto:triftingmarket11@gmail.com" class="text-black">triftingmarket11@gmail.com</a></li>
                        <li><i class="fas fa-phone"></i> <strong>Telepon:</strong> +62 882-2829-3505</li>
                        <li><i class="fas fa-map-marker-alt"></i> <strong>Alamat:</strong> Jl.Tirtosari Klepu, KEC.Balong, KAB.Ponorogo</li>
                    </ul>
                </div>

                <div class="social-media mt-4">
                    <h4 class="text-black">Ikuti Toko  Kami</h4>
                    <p>Temukan kami di media sosial:</p>
                    <ul class="social-links list-inline">
                        <li class="list-inline-item"><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                        <li class="list-inline-item"><a href="https://twitter.com" target="_blank"><i class="fab fa-tiktok"></i> Tiktok</a></li>
                        <li class="list-inline-item"><a href="https:/herdii.pak/instagram.com" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
            </div>

            <!-- Form Kontak -->
            <div class="col-md-6">
                <div class="contact-form">
                    <h4>Kontak Melalui Email</h4>
                    <p>Jika Anda ingin mengirim pesan kepada kami, klik tombol di bawah ini:</p>
                    <a href="mailto:triftingmarket11@gmail.com" class="btn btn-primary">Kirim Email</a>
                    <h4 class="mt-4">Atau Hubungi Kami di WhatsApp</h4>
                    <p>Hubungi lebihh lanjut, klik tombol di bawah ini:</p>
                    <a href="https://wa.me/6282228164310" target="_blank" class="btn btn-whatsapp">Hubungi Kami di WhatsApp</a>
                </div>
            </div>
        </div>
        <style>
            /* Kontainer Utama */
            .contact-container {
                background-color: #D3D3D3;
                border-radius: 10px;
                box-shadow: linear-gradient(135deg, #ffffff, #555);
                padding: 40px 20px;
            }
            
            /* Header Section */
            .section-title {
                font-size: 2.5rem;
                font-weight: bold;
                color: #007bff;
                margin-bottom: 10px;
            }
            
            .section-subtitle {
                font-size: 1.2rem;
                color: #555;
            }
            
            /* Informasi Kontak */
            .contact-info h4 {
                font-size: 1.8rem;
                color: #007bff;
                font-weight: bold;
                margin-bottom: 15px;
            }
            
            .contact-info p {
                font-size: 1.2rem;
                color: #555;
                line-height: 1.8;
            }
            
            .contact-info ul {
                list-style: none;
                padding: 0;
            }
            
            .contact-info ul li {
                font-size: 1.1rem;
                margin-bottom: 10px;
                color: #333;
                display: flex;
                align-items: center;
            }
            
            .contact-info ul li i {
                font-size: 1.2rem;
                color: #007bff;
                margin-right: 10px;
            }
            
            /* Media Sosial */
            .social-media h4 {
                font-size: 1.8rem;
                color: #000;
                font-weight: bold;
                margin-bottom: 15px;
            }
            
            .social-links {
                padding: 0;
                list-style: none;
            }
            
            .social-links li {
                display: inline;
                margin-right: 15px;
            }
            
            .social-links a {
                text-decoration: none;
                color: #000;
                font-weight: bold;
            }
            
            .social-links a:hover {
                color: #000;
                text-decoration: underline;
            }
            
            /* Button */
            .btn-primary {
                background-color: #007bff;
                border-color: #007bff;
                font-weight: bold;
                padding: 12px 20px;
                font-size: 1rem;
                text-transform: uppercase;
            }
            
            .btn-primary:hover {
                background-color: #000;
                border-color: #1ebe57;
                color: #fff;
            }
            
            .btn-whatsapp {
                    background-color: #25d366; /* Warna hijau khas WhatsApp */
                    color: white; /* Warna teks */
                    padding: 10px 20px; /* Padding tombol */
                    border: none; /* Hilangkan border */
                    border-radius: 5px; /* Membuat sudut tombol melengkung */
                    text-decoration: none; /* Hilangkan garis bawah pada link */
                    font-weight: bold; /* Teks tombol tebal */
                    display: inline-block; /* Mengubah tombol menjadi elemen blok sebaris */
                    transition: background-color 0.3s ease; /* Efek transisi saat hover */
                }
            
                .btn-whatsapp:hover {
                    background-color: #1ebe57; /* Warna lebih gelap saat tombol di-hover */
                    color: white; /* Warna teks tetap putih */
                }
            
            /* Responsivitas */
            @media (max-width: 768px) {
                .contact-info ul li {
                    font-size: 1rem;
                }
            
                .contact-info h4, .social-media h4 {
                    font-size: 1.5rem;
                }
            
                .section-title {
                    font-size: 2rem;
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




