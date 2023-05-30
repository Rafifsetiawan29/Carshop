
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
          <a href="{{ route('Shop') }}" class="dropdown-item">Kendaraan Penumpang</a>
          <a href="{{ route('niaga') }}" class="dropdown-item">Kendaraan Muatan</a>
          <a href="{{ route('pertanian') }}" class="dropdown-item">Mesin Pertanian</a>
        </div>
      </div>
      <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
    </div>
  </div>
  <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
</div>
  </div>
</nav>
<!-- Navbar End -->

        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="w-100" src="/assets/image/home/fortuner.jpeg" alt="Image" />
                  <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                      <div class="row align-items-center justify-content-center justify-content-lg-start">
                        <div class="col-10 col-lg-7 text-center text-lg-start">
                          <h6 class="text-white text-uppercase mb-3 animated slideInDown">Kendaraan Penumpang</h6>
                          <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">PT.ARTHAASIA FINANCE menawarkan beberapa koleksi kendaraan penumpang untuk anda</h1>
                          <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                        <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                          <img class="img-fluid" src="/assets/image/home/carousel-1.png" alt="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="w-100" src="/assets/image/home/hino3.jpg" alt="Image" />
                  <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                      <div class="row align-items-center justify-content-center justify-content-lg-start">
                        <div class="col-10 col-lg-7 text-center text-lg-start">
                          <h6 class="text-white text-uppercase mb-3 animated slideInDown">Kendaraan Muatan</h6>
                          <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">PT.ARTHAASIA FINANCE menawarkan beberapa koleksi kendaraan muatan untuk anda</h1>
                          <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                        <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                          <img class="img-fluid" src="/assets/image/home/truk1.png" alt="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="w-100" src="/assets/image/home/traktor.jpeg" alt="Image" />
                  <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                      <div class="row align-items-center justify-content-center justify-content-lg-start">
                        <div class="col-10 col-lg-7 text-center text-lg-start">
                          <h6 class="text-white text-uppercase mb-3 animated slideInDown">Mesin Pertanian</h6>
                          <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">PT.ARTHAASIA FINANCE menawarkan beberapa koleksi mesin pertanian untuk anda</h1>
                          <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                        <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                          <img class="img-fluid" src="/assets/image/home/mesin2.png" alt="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <!-- Carousel End -->
      
          <!-- Service Start -->
          <div class="container-xxl service py-5">
            <div class="container">
              <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Explore About</h1>
              </div>
              <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="d-flex py-5 px-4">
                    <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                      <h5 class="mb-3">Sejarah</h5>
                      <p>   PT. Arthaasia Finance adalah perusahaan pembiayaan yang didirikan untuk bergerak di bidang Pembiayaan Investasi, Pembiayaan Modal Kerja dan Pembiayaan Multiguna. Berdiri sejak April 2000, PT. Arthaasia Finance memiliki jaringan cabang yang luas di Sumatera, Jawa, Kalimantan dan Sulawesi.</p>
                      <a class="text-secondary border-bottom" href="">Read More</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                      <h5 class="mb-3">Visi Misi</h5>
                      <p>Sebagai perusahaan yang baik dan benar. Kami juga mempunyai beberapa visi dan misi untuk menunjang keberhasilan dan memajukan perusahaan.</p>
                      <a class="text-secondary border-bottom" href="">Read More</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="d-flex py-5 px-4">
                    <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                      <h5 class="mb-3">Penghargaan</h5>
                      <p>Kami juga berhasil mendapatkan dan memenangkan beberapa penghargaan. Salah satu penghargaan yang kami dapat yaitu Juara 1 Perusahaan Pembiayaan Terbaik 2010 dalam kategori Total Aset dibawah Rp 500 Milyar.</p>
                      <a class="text-secondary border-bottom" href="">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Service End -->
      
          <!-- Service Start -->
          <div class="container-xxl service py-5">
            <div class="container">
              <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Explore Shop</h1>
              </div>
              <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                  <div class="nav w-100 nav-pills me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                      <i class="fa fa-car-side fa-2x me-3"></i>
                      <h4 class="m-0">Kendaraan Penumpang</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                      <i class="fa fa-car fa-2x me-3"></i>
                      <h4 class="m-0">Kendaraan Muatan</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                      <i class="fa fa-cog fa-2x me-3"></i>
                      <h4 class="m-0">Mesin Pertanian</h4>
                    </button>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                      <div class="row g-4">
                        <div class="col-md-6" style="min-height: 350px">
                          <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100" src="/assets/image/home/fortuner1.jpeg" style="object-fit: cover" alt="" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <h3 class="mb-3">Kami menyediakan kendaraan penumpang berkualitas terbaik untuk memenuhi kebutuhan perjalanan Anda.</h3>
                          <p class="mb-4">Setiap kendaraan yang kami tawarkan telah melewati proses seleksi ketat untuk memastikan kualitas, keamanan, dan kenyamanan terbaik bagi pelanggan kami. Kendaraan penumpang yang tersedia di toko kami mencakup berbagai jenis dan merek terkemuka di industri otomotif. Setiap kendaraan dilengkapi dengan fitur-fitur modern yang dirancang untuk meningkatkan pengalaman berkendara dan memberikan kenyamanan maksimal kepada penumpang. Berikut ini adalah beberapa jenis kendaraan penumpang yang kami tawarkan:</p>
                          <p><i class="fa fa-check text-success me-3"></i>Fortuner</p>
                          <p><i class="fa fa-check text-success me-3"></i>CR-V</p>
                          <p><i class="fa fa-check text-success me-3"></i>Alphard</p>
                          <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                      <div class="row g-4">
                        <div class="col-md-6" style="min-height: 350px">
                          <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100" src="/assets/image/home/truk1.jpeg" style="object-fit: cover" alt="" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <h3 class="mb-3">Kami senang dapat memperkenalkan koleksi kendaraan muatan berkualitas tinggi yang siap untuk memenuhi kebutuhan bisnis dan transportasi Anda.</h3>
                          <p class="mb-4">Kami menyediakan berbagai pilihan kendaraan muatan yang dapat mengatasi tugas-tugas berat dengan efisiensi dan keandalan. Setiap kendaraan muatan yang kami tawarkan dilengkapi dengan spesifikasi teknis yang lengkap dan informasi yang jelas tentang kapasitas muatan, efisiensi bahan bakar, dan fitur-fitur keamanan. Kendaraan muatan yang tersedia di toko kami mencakup berbagai jenis dan ukuran, dirancang untuk memenuhi kebutuhan bisnis dari berbagai sektor. Berikut ini adalah beberapa jenis kendaraan muatan yang kami tawarkan:</p>
                          <p><i class="fa fa-check text-success me-3"></i>Hino 600</p>
                          <p><i class="fa fa-check text-success me-3"></i>Mitsubishi Odisha</p>
                          <p><i class="fa fa-check text-success me-3"></i>Mitsubishi Coth</p>
                          <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                      <div class="row g-4">
                        <div class="col-md-6" style="min-height: 350px">
                          <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100" src="/assets/image/home/traktor1.jpeg" style="object-fit: cover" alt="" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <h3 class="mb-3">Kami dengan bangga menawarkan berbagai jenis mesin pertanian yang dirancang khusus untuk meningkatkan efisiensi dan produktivitas di sektor pertanian.</h3>
                          <p class="mb-4">Kami memahami pentingnya mesin pertanian yang handal dan efisien dalam keberhasilan bisnis pertanian Anda. Setiap mesin pertanian yang kami tawarkan telah melalui uji kualitas ketat dan dirancang untuk memberikan performa terbaik dalam lingkungan pertanian. Dengan perpaduan antara teknologi terkini dan ketangguhan yang teruji, mesin pertanian kami akan membantu Anda mencapai hasil panen yang optimal. Berikut ini adalah beberapa jenis mesin pertanian yang kami tawarkan:</p>
                          <p><i class="fa fa-check text-success me-3"></i>Traktor</p>
                          <p><i class="fa fa-check text-success me-3"></i>Traktor Tangan</p>
                          <p><i class="fa fa-check text-success me-3"></i>Mesin Penanam</p>
                          <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Service End -->

@stop