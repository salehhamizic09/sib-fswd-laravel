<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Item - Boejank_Boentoe09</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/1babd9929f.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#">Detail Product</a>
            {{-- <a class="navbar-brand" href="{{ route('landing') }}">Kembali</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>            
        </div>
    </nav>
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('storage/product/' . $product->image) }}" alt="..." /></div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">{{ $product->name }}</h1>
                    <div class="fs-5 mb-5">
                        @if ($product->sale_price != 0)
                            <span class="text-decoration-line-through">Rp.{{ number_format($product->price, 0) }}</span>
                            <span>Rp.{{ number_format($product->sale_price, 0) }}</span>
                        @else
                            <span>Rp.{{ number_format($product->price, 0) }}</span>
                        @endif
                    </div>
                    <h2>Detail Product</h2>
                    <p class="lead"> Category   : {{ $product->category->name }}</p>
                    <p class="lead"> Nama       : {{ $product->name }}</p>
                    <p class="lead"> Price      : {{ $product->price }}</p>
                    <p class="lead"> Sale Price : {{ $product->sale_price }}</p>
                    <p class="lead"> Brand      : {{ $product->brands }}</p>
                    <p class="lead"> Rating     : {{ $product->rating }}</p>
                    <div class="d-flex">
                        <a class="btn btn-outline-success flex-shrink-0" href="https://wa.me/{{ $phoneNumber }}" target="_blank">
                            <i class="fa-brands fa-whatsapp"></i>
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related items section-->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Related products</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($related as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            @if ($product['sale_price'] != 0)
                                <!-- Sale badge-->
                                <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            @endif

                            <!-- Product image-->
                            <img class="card-img-top" src="{{ asset('storage/product/' . $product->image) }}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <a href="{{ route('product.show', ['id' => $product->id]) }}" style="text-decoration: none" class="text-dark">
                                        <small class="text-strong">{{ $product->category->name }}</small>
                                        <h5 class="fw-bolder">{{ $product->name }}</h5>
                                    </a>
                                    {{-- product rating --}}
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        @for ($i = 0; $i < $product->rating; $i++)
                                            <div class="bi-star-fill"></div>
                                        @endfor
                                    </div>
                                    <!-- Product price-->
                                    @if ($product->sale_price != 0)
                                        <span class="text-decoration-line-through">Rp.{{ number_format($product->price, 0) }}</span>
                                        <span>Rp.{{ number_format($product->sale_price, 0) }}</span>
                                    @else
                                        <span>Rp.{{ number_format($product->price, 0) }}</span>
                                    @endif                                    
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('product.show', ['id' => $product->id]) }}">View options</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer id="footeres">
        <div class="container">
          <div class="copyrightai">
            &copy; Copyright <strong><span>Boejank_Store09</span></strong>.
          </div>
          <div class="creditsriba">
            Dibuat Oleh <a class="footerlink" href="#">Tegar Saleh Hamizic</a>
          </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>