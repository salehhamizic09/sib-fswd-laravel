<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Boejank_Store09</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Groovin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="#"><span>Boejank_</span>Store09</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#carouselExampleIndicators">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Product</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="{{ route('landing', ['category' => $category->name]) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
          </li> 
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                  
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        <form class="d-flex">            
            @auth
                <a href="{{ route('dashboard') }}" class="btn btn-outline-light ms-1">
                    <i class="bi-person-fill me-1"></i>
                    Dashboard
                </a>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="btn btn-outline-light ms-1">
                    <i class="bi-person-fill me-1"></i>
                    Login
                </a>
            @endguest
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

      <!-- Carousel-->
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($sliders as $slider)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->iteration - 1 }}" class="{{ $loop->first ? 'active' : '' }}"
                    aria-current="{{ $loop->first ? 'true' : '' }}" aria-label="Slide 1"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($sliders as $slider)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}" data-bs-interval="3000">
                    <img src="{{ asset('storage/slider/' . $slider->image) }}" class="d-block w-100" alt="{{ $slider->image }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $slider->title }}</h5>
                        <p>{{ $slider->caption }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

  <main id="main">  
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
  
          <div class="row no-gutters">
            <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
            <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
              <div class="content d-flex flex-column justify-content-center">
                <h3>TENTANG KAMI</h3>
                <p>
                    Boejank_Store09 merupakan sebuah usaha yang didirikan oleh Tegar Saleh Hamizic yang mana tujuan pembuatan nya adalah untuk mempermudah 
                    masyarakat umum dalam berbelanja kebutuhan barang yang diinginkan.
                </p>
                <div class="row">
                  <div class="col-md-6 icon-box">
                    <i class="bx bx-receipt"></i>
                    <h4>Terpercaya</h4>
                    <p>Barang yang dijual oleh Boejank_Store09 merupakan barang yang legal/tidak terdapat masalah hukum.</p>
                  </div>
                  <div class="col-md-6 icon-box">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Berkualitas</h4>
                    <p>Barang yang dijual oleh Boejank_Store09 merupakan barang yang berkualitas tinggi.</p>
                  </div>
                  <div class="col-md-6 icon-box">
                    <i class="bx bx-images"></i>
                    <h4>Memiliki Berbagai Macam Harga</h4>
                    <p>Barang yang dijual oleh Boejank_Store09 memiliki banyak varian harga karena kami percaya bahwa setiap kualitas barang pasti memiliki
                        harga yang sesuai untuk dibayarkan.
                    </p>
                  </div>
                  <div class="col-md-6 icon-box">
                    <i class="bx bx-shield"></i>
                    <h4>Banyak Discount</h4>
                    <p>Boejank_Store09 menyediakan berbagai macam jenis discount pada setiap barang yang dijual.</p>
                  </div>
                </div>
              </div><!-- End .content-->
            </div>
          </div>
  
        </div>
      </section><!-- End About Section -->

    <!-- Section/product-->
    <section class="patung py-1">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="section-title" id="product">
                <h2>Product</h2>
                <p>Terdapat Berbagai macam produk-produk unggulan yang telah kami sediakan</p>
            </div>

            <form action="{{ route('landing') }}" method="GET">
                @csrf
                <div class="row g-3 my-5">
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="Min" name="min" value="{{ old('min') }}">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="Max" name="max" value={{ old('max') }}>
                    </div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-warning">Terapkan</button>
                    </div>
                </div>
            </form>

            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @forelse ($products as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            @if ($product['sale_price'] != 0)
                                <!-- Sale badge-->
                                <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            @endif

                            <!-- Product image-->
                            <img class="card-img-top" src="{{ asset('storage/product/' . $product->image) }}" alt="{{ $product->name }}" />

                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <a href="{{ route('product.show', ['id' => $product->id]) }}" style="text-decoration: none" class="text-dark">
                                        <small class="text-strong">{{ $product->category->name }}</small>
                                        <h5 class="fw-bolder">{{ $product->name }}</h5>
                                    </a>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        @for ($i = 0; $i < $product->rating; $i++)
                                            <div class="bi-star-fill"></div>
                                        @endfor
                                    </div>
                                    <!-- Product price-->
                                    @if ($product['sale_price'] != 0)
                                        <span class="text-muted text-decoration-line-through">Rp.{{ number_format($product->price, 0) }}</span>
                                        Rp.{{ number_format($product->sale_price, 0) }}
                                    @else
                                        Rp.{{ number_format($product->price, 0) }}
                                    @endif
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-secondary w-100 text-center" role="alert">
                        <h4>Produk belum tersedia</h4>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Jika saat mengunjungi halaman website ini para pengunjung memiliki kendala atau pertanyaan yang ingin disampaikan bisa menghubungi
            kontak dibawah ini.
          </p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>Perumahan Beliung indah, Jambi</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+62 823385746741</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">Boejank_Store09@example.com</a></p>
            </div>
          </div>

        </div>
        
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Boejank_<span>Store09</span></h3>
              <p>Boejank_Store09 merupakan sebuah perusahaan yang bergerak dibidang perdagangan. Banyak hal yang dijual di Boejank_ Store09
                seperti sepatu, tas, handpone dll.</p>                            
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>NAVIGASI</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#carouselExampleIndicators">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#product">Product</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
             <h4>KONTAK KAMI</h4>
                <p>
                Perumahan Beliung Indah<br>
                JAMBI<br>
                <strong>Phone:</strong> +62 82385746741<br>
                <strong>Email:</strong> Boejank_Store09@example.com<br>
              </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>SOSIAL MEDIA</h4>
            <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>            
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Boejank_Store09</span></strong>.
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/groovin-free-bootstrap-theme/ -->
        Dibuat Oleh <a href="#">Tegar Saleh Hamizic</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>