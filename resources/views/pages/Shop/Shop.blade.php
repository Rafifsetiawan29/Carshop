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
        <h1 class="display-3 text-white mb-3 animated slideInDown">Mobil Yang kami miliki</h1>
      </div>
    </div>
  </header>
  <!-- Section-->
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <h3 class="text-center mb-5">Daftar Mobil</h3>
      <div
        class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"
      >
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div
              class="badge badge-custom bg-warning text-white position-absolute"
              style="top: 0; right: 0"
            >
              Tidak Tersedia
            </div>
            <!-- Product image-->
            <img
              class="card-img-top"
              src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
              alt="..."
            />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Special Item</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.200.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Bahan bakar</span>
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
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a
                  class="btn btn-info mt-auto text-white"
                  href="{{route('detail')}}"
                  >Detail</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div
              class="badge badge-custom bg-success text-white position-absolute"
              style="top: 0; right: 0"
            >
              Tersedia
            </div>
            <!-- Product image-->
            <img
              class="card-img-top"
              src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
              alt="..."
            />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Special Item</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.200.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Bahan bakar</span>
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
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a
                  class="btn btn-info mt-auto text-white"
                  href="{{route('detail')}}"
                  >Detail</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div
              class="badge badge-custom bg-success text-white position-absolute"
              style="top: 0; right: 0"
            >
              Tersedia
            </div>
            <!-- Product image-->
            <img
              class="card-img-top"
              src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
              alt="..."
            />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Special Item</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.200.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Bahan bakar</span>
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
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a
                  class="btn btn-info mt-auto text-white"
                  href="{{route('detail')}}"
                  >Detail</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @stop