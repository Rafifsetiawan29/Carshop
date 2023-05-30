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
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Sejarah</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">About</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Sejarah</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Call To Action Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8 col-md-6">
                    <h1 class="mb-4"><span class="text-primary">Sejarah Perusahaan</span> PT.ARTHAASIA FINANCE</h1>
                    <p class="mb-0">PT. Arthaasia Finance adalah perusahaan pembiayaan yang didirikan untuk bergerak di bidang Pembiayaan Investasi, Pembiayaan Modal Kerja dan Pembiayaan Multiguna.

                        Berdiri sejak April 2000, PT. Arthaasia Finance memiliki jaringan cabang yang luas di Sumatera, Jawa, Kalimantan dan Sulawesi. Menyusul akuisisi oleh Hitachi Capital Corporation (saat ini, Mitsubishi HC Capital Inc.) pada 12 Januari 2012.
                        
                        Sebaliknya, Hitachi Capital Corporation (saat ini, Mitsubishi HC Capital Inc.) mendirikan perusahaan pembiayaan lain bernama PT Hitachi Capital Finance Indonesia pada tahun 2014. Pada 1 Juli 2021, PT Arthaasia Finance melakukan merger dengan PT Hitachi Capital Finance Indonesia. Saat ini, grup Mitsubishi HC Capital Inc. memegang 79,72% saham di perusahaan tersebut. Penggabungan ini secara signifikan telah memperkuat kesehatan pembiayaan PT. Arthaasia Finance.
                        
                        PT. Arthaasia Finance menyediakan layanan keuangan bagi pelanggan dan membangun hubungan saling percaya dengan memanfaatkan aliansi bisnis dengan Mitsubishi HC Capital Inc.</p>
                </div>
                <div class="col-lg-4 col-md-6">
                        <img class="img-fluid" src="/assets/image/home/logo.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->

        
@stop