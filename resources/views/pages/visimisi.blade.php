@extends('layouts.fronend.master')
@section('content') 

 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
  <a href="/pages/home.blade.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
    <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>PT. ARTHAASIA FINANCE</h2>
  </a>
  <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
      <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
        <div class="dropdown-menu fade-up m-0">
          <a href="{{ route('sejarah') }}" class="dropdown-item">Sejarah</a>
          <a href="{{ route('awards') }}" class="dropdown-item">Awards</a>
          <a href="{{ route('visimisi') }}" class="dropdown-item">Visi Misi</a>
        </div>
      </div>
      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Shop</a>
        <div class="dropdown-menu fade-up m-0">
          <a href="{{ route('penumpang') }}" class="dropdown-item">Kendaraan Penumpang</a>
          <a href="{{ route('niaga') }}" class="dropdown-item">Kendaraan Muatan</a>
          <a href="{{ route('pertanian') }}" class="dropdown-item">Mesin Pertanian</a>
        </div>
      </div>
      <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
    </div>
  </div>
</nav>
<!-- Navbar End -->

  <!-- Page Header Start -->
  <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg)">
    <div class="container-fluid page-header-inner py-5">
      <div class="container text-center">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Visi Misi</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center text-uppercase">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">About</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">Visi Misi</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Page Header End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
          <div class="text-center">
            <h1 class="text-primary text-uppercase">// Visi //</h1>
          </div>
          <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item text-center">
              <h5 class="mb-0">Visi</h5>
              <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">
                  Berkontribusi pada pembangunan ekonomi dan peningkatan standar hidup di Indonesia dengan mengembangkan bisnis pembiayaan yang unik dan sebagai satu-satunya perusahaan yang menciptakan nilai sosial (social values creating
                  company).
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Testimonial End -->
  
      <!-- Testimonial Start -->
      <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
          <div class="text-center">
            <h1 class="text-primary text-uppercase">// Misi //</h1>
          </div>
          <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item text-center">
              <h5 class="mb-0">Misi</h5>
              <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">
                  Kami akan berkontribusi secara kreatif untuk mobilitas masyarakat (mobility society) yang makmur dengan menyediakan produk pembiayaan yang unik dan menarik yang bernilai tinggi dan memenuhi detail kebutuhan pelanggan kami.
                </p>
              </div>
            </div>
            <div class="testimonial-item text-center">
              <h5 class="mb-0">Misi</h5>
              <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">
                  Kami akan secara proaktif memberikan pembiayaan kepada perusahaan yang memiliki teknologi canggih dan / atau layanan yang sangat baik, sehingga dapat berkontribusi secara tidak langsung bagi kesejahteraan masyarakat
                  Indonesia dan orang lain melalui aktivitas pelanggan kami.
                </p>
              </div>
            </div>
            <div class="testimonial-item text-center">
              <h5 class="mb-0">Misi</h5>
              <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">
                  Kami akan berkomitmen untuk menjual produk pembiayaan kami dalam bentuk penyediaan dana bagi konsumen untuk pembelian barang dengan pembayaran secara cicilan dengan proses yang cepat, pelayanan optimal yang berkualitas.
                </p>
              </div>
            </div>
            <div class="testimonial-item text-center">
              <h5 class="mb-0">Misi</h5>
              <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">
                  Kami akan melindungi perusahaan, pelanggan, karyawan, pemegang saham, kreditur dan pemangku kepentingan lainnya dengan menjalankan bisnis sesuai dengan Tata Kelola Perusahaan yang Baik dan sesuai dengan hukum dan peraturan
                  yang berlaku.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Testimonial End -->
    
@stop