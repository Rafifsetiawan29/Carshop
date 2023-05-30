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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Mesin Pertanian</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">SHOP</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Mesin Pertanian</li>
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
            <h6 class="text-primary text-uppercase">// Mobil yang kami Miliki //</h6>
            <h1 class="mb-5">Mesin Pertanian</h1>
          </div>
          <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item">
                <div class="position-relative overflow-hidden">
                  <img class="img-fluid" src="img/car/pertanian/kubota M4070.jpg" alt="" />
                  <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                    <h6 class="text-white mb-0">weight            : 89 kg</h6>
                    <h6 class="text-white mb-0">Bahan baka        : Solar</h6>
                    <h6 class="text-white mb-0">Tingkat kecepatan : 2200 RPM</h6>
                  </div>
                </div>
                <div class="bg-light text-center p-4">
                  <h5 class="fw-bold mb-0">kubota M4070</h5>
                  <small>Rp.723.050.000</small>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item">
                <div class="position-relative overflow-hidden">
                  <img class="img-fluid" src="img/car/pertanian/yamaha rice transplant.jpg" alt="" />
                  <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                    <h6 class="text-white mb-0">weight            : 175 Kg </h6>
                    <h6 class="text-white mb-0">working lines     : 4 lines</h6>
                    <h6 class="text-white mb-0">Tingkat kecepatan : 3600 RPM</h6>
                  </div>
                </div>
                <div class="bg-light text-center p-4">
                  <h5 class="fw-bold mb-0">yamaha rice transplant</h5>
                  <small>530.000.000</small>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item">
                <div class="position-relative overflow-hidden">
                  <img class="img-fluid" src="img/car/pertanian/honda rotaty tiller.jpg" alt="" />
                  <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                    <h6 class="text-white mb-0">weight             : 38 Kgl</h>
                    <h6 class="text-white mb-0">Bahan bakar        : solarp</h>
                    <h6 class="text-white mb-0">Tingkat kecepatan  : 3600 RPM</h6>
                  </div>
                </div>
                <div class="bg-light text-center p-4">
                  <h5 class="fw-bold mb-0">honda rotaty tille</h5>
                  <small>Rp.1.230.000.000</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Team End -->
  
      <!-- Booking Start -->
      <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
          <div class="row gx-5">
            <div class="col-lg-6 py-5">
              <div class="py-5">
                <h1 class="text-white mb-4">Langkah Langkah Pemesanan Mobil</h1>
                <p class="text-white mb-0">1. Mengisi Seluruh form Book a Cars</p>
                <p class="text-white mb-0">2. menunggu confirmasi dari coustemer service</p>
                <p class="text-white mb-0">3. pilih metode pembayaran</p>
                <p class="text-white mb-0">4. Jika Pembayaranya Online maka segera selesaikan pembayaran</p>
                <p class="text-white mb-0">5. jika Pembayarannya offline segera ke Kantor</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                <h1 class="text-white mb-4">Book For A Cars</h1>
                <form>
                  <div class="row g-3">
                    <div class="col-12 col-sm-6">
                      <input type="text" class="form-control border-0" placeholder="Nama" style="height: 55px" />
                    </div>
                    <div class="col-12 col-sm-6">
                      <input type="email" class="form-control border-0" placeholder="Email" style="height: 55px" />
                    </div>
                    <div class="col-12 col-sm-6">
                      <input type="text" class="form-control border-0" placeholder="No.Handphone" style="height: 55px" />
                    </div>
                    <div class="col-12 col-sm-6">
                      <select class="form-select border-0" style="height: 55px">
                        <option selected>Nama mobil</option>
                        <option value="1">yamaha rice transplantr</option>
                        <option value="2">honda rotaty tiller</option>
                        <option value="3">kubota M4070</option>
                      </select>
                    </div>
                    <div class="col-12">
                      <textarea class="form-control border-0" placeholder="Alamat"></textarea>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-secondary w-100 py-3" type="submit">Book Now</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Booking End -->

@stop