@extends('master.layout')

@section('title')
    Profile
@endsection

@section('content')
<div class="container" style="padding-top: 60px;">
  <div class="row">
      <div class="col-md-12">

        <div class="profile-container">
        <div class="profile-header">
    <img src="data_gambar/icon1.jpg" alt="developer1" class="foto-profil">
    <h2 class="text-black">HERDI WINARNO</h2>
</div>

<!-- Tambahkan CSS -->
<style>
    .profile-header h2 {
        color: black; /* Mengubah warna teks menjadi hitam */
    }
</style>

            <div class="profile-text">
                <p class="specialty">Keahlian: Frontend-devloper dan Pengembangan website eccomerce</p>
                <p>Saya adalah seorang <strong>Web Developer</strong>Meskipun saya masih di bangku SMK, saya sudah memiliki pengalaman dalam membangun situs web yang responsif dan mudah digunakan. Saya menguasai berbagai teknologi seperti HTML, CSS, JavaScript, PHP, serta platform CMS populer seperti WordPress dan Shopify.

Saya selalu berusaha belajar hal baru dan memperdalam pemahaman saya tentang pengembangan web. Selain itu, saya juga tertarik dengan SEO dan cara meningkatkan pengalaman pengguna melalui desain antarmuka yang sederhana namun efektif.</p>
                <p>Tujuan saya adalah membuat website yang tidak hanya terlihat bagus, tetapi juga mudah digunakan dan membantu bisnis mencapai tujuannya. Saya sangat bersemangat untuk terus belajar dan berkembang dalam dunia web development. Jika Anda memiliki pertanyaan atau ingin berbicara lebih lanjut, saya terbuka untuk diskusi dan kesempatan baru!<a href="https://wa.me/6288228293505" target="_blank" class="contact-button">Kontak Saya</a>.</p>
            </div>

            <div class="profile-social-media mt-4">
                <h4>Ikuti Saya:</h4>
                <ul class="social-links list-inline">
                    <li class="list-inline-item">
                        <a href="https://instagram.com/https://www.instagram.com/herdii.pak/profilecard/?igsh=a282ZXBxMjQ0aHo3" target="_blank" class="social-icon">
                            <i class="fab fa-instagram"></i> Instagram
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://tiktok.com/https://www.tiktok.com/profile.php?id=100074807480947&mibextid=ZbWKwL" target="_blank" class="social-icon">
                            <i class="fab fa-tiktok"></i> Tiktok
                        </a>
                    </li>
                </ul>
        </div>
        <style>
            /* Kontainer utama */
            .profile-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin: 50px auto;
                padding: 20px;
                max-width: 800px;
                background: linear-gradient(135deg, #d32f2f, #f9f9f9);
                border-radius: 15px;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
                text-align: center;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            
            .profile-container:hover {
                transform: scale(1.02);
                box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
            }
            
            /* Header profil (foto + nama) */
            .profile-header {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-bottom: 20px;
            }
            
            /* Penataan gambar profil */
            .foto-profil {
                width: 150px;
                height: 150px;
                border-radius: 50%;
                object-fit: cover;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease;
                margin-bottom: 10px;
            }
            
            .foto-profil:hover {
                transform: scale(1.1);
            }
            
            /* Nama di bawah foto */
            .profile-header h2 {
                font-size: 36px;
                font-weight: bold;
                margin: 0;
                color: #007BFF;
            }
            
            /* Penataan teks */
            .profile-text {
                color: #333;
                max-width: 500px;
                margin: 0 auto;
            }
            
            .profile-text .specialty {
                font-size: 18px;
                font-weight: 500;
                margin-bottom: 20px;
                color: #555;
                font-style: italic;
            }
            
            .profile-text p {
                font-size: 16px;
                line-height: 1.8;
                color: #444;
            }
            
            /* Tombol kontak */
            .contact-button {
                display: inline-block;
                background-color: #4caf50;
                color: white;
                padding: 12px 20px;
                text-align: center;
                text-decoration: none;
                font-size: 18px;
                font-weight: bold;
                border-radius: 5px;
                margin-top: 20px;
                cursor: pointer;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
            }
            
            .contact-button:hover {
                background-color: #4caf50;
                color: #fff;
                transform: translateY(-2px);
            }
            
            .contact-button:active {
                background-color: #0056b3;
                color: white; /* Warna tetap putih saat tombol diklik */
            }
            
            
            
            /* Responsivitas */
            @media (max-width: 768px) {
                .profile-container {
                    padding: 15px;
                }
            
                .foto-profil {
                    width: 120px;
                    height: 120px;
                }
            
                .profile-header h2 {
                    font-size: 28px;
                }
            }
            
            
            .profile-container {
                    background-color: #f9f9f9;
                    padding: 20px;
                    border-radius: 10px;
                    text-align: center;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                }
            
                .profile-header img {
                    width: 150px;
                    height: 150px;
                    border-radius: 50%;
                    margin-bottom: 15px;
                }
            
                .profile-header h2 {
                    font-size: 24px;
                    font-weight: bold;
                    margin-bottom: 10px;
                }
            
                .profile-text p {
                    font-size: 16px;
                    line-height: 1.6;
                }
            
                .profile-social-media h4 {
                    margin-top: 20px;
                    font-size: 18px;
                    font-weight: bold;
                }
            
                .social-links {
                    padding: 0;
                    margin: 0;
                    list-style: none;
                }
            
                .social-links .list-inline-item {
                    margin: 10px;
                }
            
                .social-links a {
                    text-decoration: none;
                    font-size: 16px;
                    color: #333;
                    font-weight: bold;
                    transition: color 0.3s ease;
                }
            
                .social-links a:hover {
                    color: #d32f2f;
                }
            
                .social-links i {
                    margin-right: 8px;
                    font-size: 20px;
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


