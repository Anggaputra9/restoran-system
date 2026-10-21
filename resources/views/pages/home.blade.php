<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>{{ $microsite->name ?? 'Restoran Keluarga' }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .hero-header { background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url('{{ asset("img/bg-hero.jpg") }}') center center no-repeat; background-size: cover; }
        @keyframes spin-slow { 100% { transform: rotate(360deg); } }
        .spin-slow { animation: spin-slow 20s linear infinite; }
        .gallery-img { transition: transform 0.3s ease; cursor: pointer; }
        .gallery-img:hover { transform: scale(1.05); z-index: 1; position: relative; box-shadow: 0 10px 20px rgba(0,0,0,0.2); }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        
        <!-- Navbar Start -->
        <div class="container-xxl position-relative p-0" id="beranda">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0 sticky-top shadow-sm">
                <a href="#" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>{{ $microsite->name ?? 'Restoran' }}</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="#beranda" class="nav-item nav-link active">Beranda</a>
                        <a href="#tentang" class="nav-item nav-link">Tentang</a>
                        <a href="#promo" class="nav-item nav-link">Promo</a>
                        <a href="#menu" class="nav-item nav-link">Menu</a>
                        <a href="#galeri" class="nav-item nav-link">Galeri</a>
                        <a href="#kontak" class="nav-item nav-link">Kontak</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Cita Rasa<br>Keluarga Nusantara</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Hadir dengan porsi besar dan resep otentik, tempat terbaik untuk merayakan kebersamaan bersama orang tercinta tanpa repot melakukan reservasi.</p>
                            <a href="#menu" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Lihat Menu Kami</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <!-- GAMBAR HERO BERPUTAR -->
                            <img class="img-fluid spin-slow" src="{{ asset('img/hero.png') }}" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar End -->

        <!-- About Start -->
        <div class="container-xxl py-5" id="tentang">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start"><img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('img/about-1.jpg') }}"></div>
                            <div class="col-6 text-start"><img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="{{ asset('img/about-2.jpg') }}" style="margin-top: 25%;"></div>
                            <div class="col-6 text-end"><img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="{{ asset('img/about-3.jpg') }}"></div>
                            <div class="col-6 text-end"><img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="{{ asset('img/about-4.jpg') }}"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Tentang Kami</h5>
                        <h1 class="mb-4">Selamat Datang di <i class="fa fa-utensils text-primary me-2"></i>{{ $microsite->name ?? 'Restoran' }}</h1>
                        <p class="mb-4">Kami menyajikan hidangan makanan berat dan paket keluarga dengan kualitas terbaik. Tempat yang luas, nyaman, dan ramah anak menjadikan kami pilihan utama keluarga.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                    <div class="ps-4"><p class="mb-0">Tahun</p><h6 class="text-uppercase mb-0">Pengalaman</h6></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                                    <div class="ps-4"><p class="mb-0">Varian</p><h6 class="text-uppercase mb-0">Menu Spesial</h6></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Promo Start (Dinamic + Fallback Dummy UI) -->
        <div class="container-xxl pt-5 pb-3" id="promo">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Spesial Untuk Anda</h5>
                    <h1 class="mb-5">Promo Terkini</h1>
                </div>
                <div class="row g-4">
                    @forelse($promos as $promo)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item text-center rounded overflow-hidden shadow-sm bg-white h-100 pb-4">
                                <div class="rounded-circle overflow-hidden m-4 d-inline-block p-4 bg-primary text-white">
                                    <i class="fa fa-percent fa-4x"></i>
                                </div>
                                <h5 class="mb-2 px-3">{{ $promo->title }}</h5>
                                <p class="text-muted text-sm px-4">{{ $promo->description }}</p>
                                <small class="text-primary fw-bold">Berlaku: {{ \Carbon\Carbon::parse($promo->start_date)->format('d M') }} - {{ \Carbon\Carbon::parse($promo->end_date)->format('d M Y') }}</small>
                            </div>
                        </div>
                    @empty
                        <!-- DUMMY UI JIKA DATABASE PROMO KOSONG -->
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item text-center rounded overflow-hidden shadow-sm bg-white h-100 pb-4">
                                <div class="rounded-circle overflow-hidden m-4 d-inline-block p-4 bg-primary text-white"><i class="fa fa-gift fa-4x"></i></div>
                                <h5 class="mb-2 px-3">Diskon Keluarga 20%</h5>
                                <p class="text-muted text-sm px-4">Nikmati potongan harga khusus untuk setiap pembelian Paket Keluarga Besar.</p>
                                <small class="text-primary fw-bold">Berlaku: Hari Ini - 31 Des 2026</small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item text-center rounded overflow-hidden shadow-sm bg-white h-100 pb-4">
                                <div class="rounded-circle overflow-hidden m-4 d-inline-block p-4 bg-primary text-white"><i class="fa fa-glass-cheers fa-4x"></i></div>
                                <h5 class="mb-2 px-3">Gratis Minuman Segar</h5>
                                <p class="text-muted text-sm px-4">Dapatkan Es Teh Manis gratis untuk setiap pesanan Nasi Goreng Spesial di akhir pekan.</p>
                                <small class="text-primary fw-bold">Berlaku: Setiap Sabtu & Minggu</small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item text-center rounded overflow-hidden shadow-sm bg-white h-100 pb-4">
                                <div class="rounded-circle overflow-hidden m-4 d-inline-block p-4 bg-primary text-white"><i class="fa fa-birthday-cake fa-4x"></i></div>
                                <h5 class="mb-2 px-3">Promo Ulang Tahun</h5>
                                <p class="text-muted text-sm px-4">Tunjukkan KTP Anda yang berulang tahun bulan ini dan dapatkan hidangan penutup gratis.</p>
                                <small class="text-primary fw-bold">Berlaku: Sepanjang Bulan Ini</small>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
        <!-- Promo End -->

        <!-- Menu Start (Dinamic + Fallback Dummy UI) -->
        <div class="container-xxl py-5" id="menu">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Daftar Menu</h5>
                    <h1 class="mb-5">Pilihan Makanan & Paket Keluarga</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    @if($categories->isNotEmpty())
                        <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                            @foreach($categories as $index => $category)
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 {{ $index == 0 ? 'active' : '' }}" data-bs-toggle="pill" href="#tab-{{ $category->id }}">
                                    <i class="fa fa-hamburger fa-2x text-primary"></i>
                                    <div class="ps-3">
                                        <small class="text-body">Kategori</small>
                                        <h6 class="mt-n1 mb-0">{{ $category->name }}</h6>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            @foreach($categories as $index => $category)
                            <div id="tab-{{ $category->id }}" class="tab-pane fade show p-0 {{ $index == 0 ? 'active' : '' }}">
                                <div class="row g-4">
                                    @foreach($category->menuItems as $menu)
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center p-3 rounded shadow-sm border border-light">
                                            @if($menu->image)
                                                <img class="flex-shrink-0 img-fluid rounded" src="{{ rtrim(env('ADMIN_STORAGE_URL'), '/') . '/' . ltrim($menu->image, '/') }}" style="width: 100px; height: 100px; object-fit: cover;">
                                            @else
                                                <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('img/menu-'.rand(1,8).'.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                                            @endif
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>{{ $menu->name }}</span>
                                                    <span class="text-primary fw-bold">Rp{{ number_format($menu->price, 0, ',', '.') }}</span>
                                                </h5>
                                                <small class="fst-italic text-muted">{{ $menu->description }}</small>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @else
                        <!-- DUMMY UI JIKA DATABASE MENU KOSONG -->
                        <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                            <li class="nav-item"><a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1"><i class="fa fa-hamburger fa-2x text-primary"></i><div class="ps-3"><small class="text-body">Kategori</small><h6 class="mt-n1 mb-0">Makanan Utama</h6></div></a></li>
                            <li class="nav-item"><a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2"><i class="fa fa-coffee fa-2x text-primary"></i><div class="ps-3"><small class="text-body">Kategori</small><h6 class="mt-n1 mb-0">Paket Keluarga</h6></div></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row g-4">
                                    <div class="col-lg-6"><div class="d-flex align-items-center"><img class="flex-shrink-0 img-fluid rounded" src="{{ asset('img/menu-1.jpg') }}" style="width: 80px;"><div class="w-100 d-flex flex-column text-start ps-4"><h5 class="d-flex justify-content-between border-bottom pb-2"><span>Nasi Goreng Spesial</span><span class="text-primary fw-bold">Rp35.000</span></h5><small class="fst-italic text-muted">Nasi goreng dengan bumbu rempah pilihan, telur, dan suwiran ayam.</small></div></div></div>
                                    <div class="col-lg-6"><div class="d-flex align-items-center"><img class="flex-shrink-0 img-fluid rounded" src="{{ asset('img/menu-2.jpg') }}" style="width: 80px;"><div class="w-100 d-flex flex-column text-start ps-4"><h5 class="d-flex justify-content-between border-bottom pb-2"><span>Ayam Bakar Madu</span><span class="text-primary fw-bold">Rp45.000</span></h5><small class="fst-italic text-muted">Ayam bakar manis gurih disajikan dengan lalapan dan sambal terasi.</small></div></div></div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane fade show p-0">
                                <div class="row g-4">
                                    <div class="col-lg-6"><div class="d-flex align-items-center"><img class="flex-shrink-0 img-fluid rounded" src="{{ asset('img/menu-3.jpg') }}" style="width: 80px;"><div class="w-100 d-flex flex-column text-start ps-4"><h5 class="d-flex justify-content-between border-bottom pb-2"><span>Paket Keluarga 4 Orang</span><span class="text-primary fw-bold">Rp150.000</span></h5><small class="fst-italic text-muted">1 Gurame Asam Manis, 4 Nasi Putih, Cah Kangkung, 4 Es Teh.</small></div></div></div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- Menu End -->

        <!-- Gallery Start (Dinamic + Fallback Dummy UI) -->
        <div class="container-xxl py-5 bg-dark text-white" id="galeri">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Galeri Foto</h5>
                    <h1 class="mb-5 text-white">Momen di Restoran</h1>
                </div>
                <div class="row g-3">
                    @forelse($galleries as $gallery)
                        <div class="col-lg-3 col-md-4 col-6 wow zoomIn" data-wow-delay="0.1s">
                            <div class="overflow-hidden rounded shadow" style="height: 200px;">
                                <img class="img-fluid w-100 h-100 gallery-img" src="{{ rtrim(env('ADMIN_STORAGE_URL'), '/') . '/' . ltrim($gallery->image, '/') }}" alt="{{ $gallery->caption ?? 'Galeri Restoran' }}" style="object-fit: cover;">
                            </div>
                        </div>
                    @empty
                        <!-- DUMMY UI JIKA DATABASE GALERI KOSONG -->
                        <div class="col-lg-3 col-md-4 col-6 wow zoomIn" data-wow-delay="0.1s"><div class="overflow-hidden rounded shadow" style="height: 200px;"><img class="img-fluid w-100 h-100 gallery-img" src="{{ asset('img/menu-1.jpg') }}" style="object-fit: cover;"></div></div>
                        <div class="col-lg-3 col-md-4 col-6 wow zoomIn" data-wow-delay="0.3s"><div class="overflow-hidden rounded shadow" style="height: 200px;"><img class="img-fluid w-100 h-100 gallery-img" src="{{ asset('img/menu-2.jpg') }}" style="object-fit: cover;"></div></div>
                        <div class="col-lg-3 col-md-4 col-6 wow zoomIn" data-wow-delay="0.5s"><div class="overflow-hidden rounded shadow" style="height: 200px;"><img class="img-fluid w-100 h-100 gallery-img" src="{{ asset('img/menu-3.jpg') }}" style="object-fit: cover;"></div></div>
                        <div class="col-lg-3 col-md-4 col-6 wow zoomIn" data-wow-delay="0.7s"><div class="overflow-hidden rounded shadow" style="height: 200px;"><img class="img-fluid w-100 h-100 gallery-img" src="{{ asset('img/menu-4.jpg') }}" style="object-fit: cover;"></div></div>
                        <div class="col-lg-3 col-md-4 col-6 wow zoomIn" data-wow-delay="0.1s"><div class="overflow-hidden rounded shadow" style="height: 200px;"><img class="img-fluid w-100 h-100 gallery-img" src="{{ asset('img/menu-5.jpg') }}" style="object-fit: cover;"></div></div>
                        <div class="col-lg-3 col-md-4 col-6 wow zoomIn" data-wow-delay="0.3s"><div class="overflow-hidden rounded shadow" style="height: 200px;"><img class="img-fluid w-100 h-100 gallery-img" src="{{ asset('img/menu-6.jpg') }}" style="object-fit: cover;"></div></div>
                        <div class="col-lg-3 col-md-4 col-6 wow zoomIn" data-wow-delay="0.5s"><div class="overflow-hidden rounded shadow" style="height: 200px;"><img class="img-fluid w-100 h-100 gallery-img" src="{{ asset('img/menu-7.jpg') }}" style="object-fit: cover;"></div></div>
                        <div class="col-lg-3 col-md-4 col-6 wow zoomIn" data-wow-delay="0.7s"><div class="overflow-hidden rounded shadow" style="height: 200px;"><img class="img-fluid w-100 h-100 gallery-img" src="{{ asset('img/menu-8.jpg') }}" style="object-fit: cover;"></div></div>
                    @endforelse
                </div>
            </div>
        </div>
        <!-- Gallery End -->

        <!-- Footer / Contact Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-0 wow fadeIn" data-wow-delay="0.1s" id="kontak">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Hubungi Kami</h4>
                        @php $settings = json_decode($microsite->settings ?? '{}', true); @endphp
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ $settings['alamat'] ?? 'Jl. Makanan Enak No. 1, Kota' }}</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ $settings['kontak'] ?? '+62 812 3456 7890' }}</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Jam Buka</h4>
                        <h5 class="text-light fw-normal">Senin - Minggu</h5>
                        <p>{{ $settings['jam_buka'] ?? '10:00 - 22:00' }}</p>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Informasi</h4>
                        <p>Sesuai dengan kebijakan restoran, kami berfokus pada pelayanan langsung di tempat (Dine-in). Kami menantikan kunjungan keluarga Anda hari ini.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright text-center py-4 border-top border-secondary">
                    &copy; {{ date('Y') }} <a class="border-bottom" href="#">{{ $microsite->name ?? 'Restoran Keluarga' }}</a>, All Right Reserved.
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>     
</html>