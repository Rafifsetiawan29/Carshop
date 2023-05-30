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
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-2.jpg)">
      <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
          <h1 class="display-3 text-white mb-3 animated slideInDown">Awards</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Pages</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Awards</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <!-- Page Header End -->

         <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="text-primary text-uppercase">// Awards //</h1>
          </div>
          <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item">
                <div class="position-relative overflow-hidden">
                  <img class="img-fluid" src="/assets/image/home/p1.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item">
                <div class="position-relative overflow-hidden">
                  <img class="img-fluid" src="/assets/image/home/p2.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item">
                <div class="position-relative overflow-hidden">
                  <img class="img-fluid" src="/assets/image/home/p3.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="team-item">
                <div class="position-relative overflow-hidden">
                  <img class="img-fluid" src="/assets/image/home/p4.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item">
                <div class="position-relative overflow-hidden">
                  <img class="img-fluid" src="/assets/image/home/p5.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item">
                <div class="position-relative overflow-hidden">
                  <img class="img-fluid" src="/assets/image/home/p6.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item">
                <div class="position-relative overflow-hidden">
                  <img class="img-fluid" src="/assets/image/home/p7.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="team-item">
                <div class="position-relative overflow-hidden">
                  <img class="img-fluid" src="/assets/image/home/p8.jpg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Team End -->

@stop