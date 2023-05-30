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
  <a href="{{ route('contact') }}" class="nav-item nav-link">Login</a>
</div>
  </div>
</nav>
<!-- Navbar End -->
 <!-- Header-->
 <header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-white">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Detail Mobil</h1>
      </div>
    </div>
  </header>
  <!-- Section-->
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row justify-content-center">
        <div class="col-lg-8 mb-5">
          <div class="card h-100">
            <!-- Product image-->
            <img
              class="card-img-top"
              src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
              alt="..."
            />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div>
                <!-- Product name-->
                <h3 class="fw-bolder text-primary">Deskripsi</h3>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Ipsa dolor corrupti porro, sit ex nemo itaque, est
                  voluptatum illum dignissimos facilis alias facere rem
                  consequatur?
                </p>
                <div class="mobil-info-list border-top pt-4">
                  <ul class="list-unstyled">
                    <li>
                      <i class="ri-checkbox-circle-line"></i>
                      <span>P3K</span>
                    </li>
                    <li>
                      <i class="ri-close-circle-line text-secondary"></i>
                      <span>CHARGER</span>
                    </li>
                    <li>
                      <i class="ri-close-circle-line text-secondary"></i>
                      <span>AUDIO</span>
                    </li>
                    <li>
                      <i class="ri-checkbox-circle-line"></i>
                      <span>AC</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="card">
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <div
                  class="d-flex justify-content-between align-items-center"
                >
                  <h5 class="fw-bolder">Special Item</h5>
                  <div class="rent-price mb-3">
                    <span style="font-size: 1rem" class="text-primary"
                      >Rp.200.000/</span
                    >day
                  </div>
                </div>
                <ul class="list-unstyled list-style-group">
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Bahan Bakar</span>
                    <span style="font-weight: 600">Bensin</span>
                  </li>
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Jumlah Kursi</span>
                    <span style="font-weight: 600">5</span>
                  </li>
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Transmisi</span>
                    <span style="font-weight: 600">Manual</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a
                  class="btn d-flex align-items-center justify-content-center btn-primary mt-auto"
                  href="#"
                  style="column-gap: 0.4rem"
                  >Beli Mobil <i class="ri-whatsapp-line"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@shop