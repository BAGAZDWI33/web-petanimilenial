<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PetaniMilenial-MHS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./assets/images/logopetanimuda.png" type="image/svg+xml">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
</head>




<body>

    <!-- 
    - #HEADER Navbar
  -->

    <header class="header" data-header>
        <div class="container">

            <a href="#" class="logo">
                <img src="./assets/images/logopetanimuda.png" width="74" height="24" alt="Adex home" class="logo-light">

                <img src="./assets/images/logopetanimuda.png" width="74" height="24" alt="Adex home" class="logo-dark">
            </a>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">
                    <a href="#" class="logo">
                        <img src="./assets/images/logopetanimuda.png" width="74" height="24" alt="PetaniMilenial home">
                    </a>

                    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">

                    <li>
                        <a href="index.php" class="navbar-link">Home</a>
                    </li>

                    <li>
                        <a href="aboutme.php" class="navbar-link">Tentang Kami</a>
                    </li>

                    <li>
                        <a href="galeri.php" class="navbar-link">Galeri</a>
                    </li>

                    <li>
                        <a href="layanan.php" class="navbar-link">Layanan</a>
                    </li>

                    <li>
                        <a href="blog.php" class="navbar-link">Blog</a>
                    </li>

                    <li>
                        <a href="contact.php" class="navbar-link">Kontak</a>
                    </li>

                </ul>


                <div class="wrapper">
                    <a href="mailto:info@email.com" class="contact-link">PetaniMilenial.indo@gmail.com</a>

                    <a href="tel:082324757905" class="contact-link">082324757905</a>
                </div>

                <ul class="social-list">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-dribbble"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-youtube"></ion-icon>
                        </a>
                    </li>

                </ul>

            </nav>
            <!-- search  -
            <div class="search-box">
                <input type="text" placeholder="Search..."/>
                <a href="a"><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>

             -- akhir -->

            <form action="register.php" method="get">
                <button type="submit" class="btn btn-primary">Bergabung</button>
            </form>

            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
            </button>

            <div class="overlay" data-nav-toggler data-overlay></div>

        </div>
    </header>


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero mb-5 ">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-2 color red"></h1>

                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-8">
                <div class="row g-5">
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-1.jpg" alt="">
                            <a class="blog-overlay" href="blogdetail.php">
                                <h4 class="text-white">Menjelajahi Dunia Oranye: Panduan Lengkap Menanam dan Memanen
                                    Wortel</h4>
                                <span class="text-white fw-bold">Mar 17, 2024</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="img/hidroponiktegal.jpg" alt="">
                            <a class="blog-overlay" href="hidroponik.php">
                                <h4 class="text-white">Pertanian Hidroponik Tegal, Jawa Tengah</h4>
                                <span class="text-white fw-bold">Jul 01, 2024</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="img/tanibawang4.jpg" alt="">
                            <a class="blog-overlay" href="tanibawang.php">
                                <h4 class="text-white">Pertanian bawang unggul berbasis teknologi hama</h4>
                                <span class="text-white fw-bold">Feb 01, 2024</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="img/strobery1.webp" alt="">
                            <a class="blog-overlay" href="petanistrobery.php">
                                <h4 class="text-white">Penanaman strobery dengan mutu teknologi terkini</h4>
                                <span class="text-white fw-bold">Jan 13, 2024</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="img/inovasi.jpeg" alt="">
                            <a class="blog-overlay" href="inovasipertanian.php">
                                <h4 class="text-white">Inovasi Teknologi Pertanian</h4>
                                <span class="text-white fw-bold">Jun 30, 2024</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-lg justify-content-center m-0">
                                <li class="page-item disabled">
                                    <a class="page-link rounded-0" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link rounded-0" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Kategori</h2>
                    <div class="d-flex flex-column justify-content-start bg-primary p-4">
                        <a class="fs-5 fw-bold text-white mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Pertanian
                            Padi</a>
                        <a class="fs-5 fw-bold text-white mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Palawija</a>
                        <a class="fs-5 fw-bold text-white mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Budidaya
                            Anggur</a>
                        <a class="fs-5 fw-bold text-white mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Penyewaan
                            Alat Pertanian</a>
                        <a class="fs-5 fw-bold text-white" href="#"><i class="bi bi-arrow-right me-2"></i>Penyuluhan
                            Pertanian</a>
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Postingan Terbaru</h2>
                    <div class="bg-primary p-4">
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0" src="img/blog-1.jpg" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">Menjelajahi
                                Dunia Oranye: Panduan Lengkap Menanam dan Memanen Wortel
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0" src="img/blog-2.jpg" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">Panen
                                Wortel dengan hasil yang memuaskan
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0" src="img/blog-1.jpg" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">Penanaman
                                Tomat dengan cara manual
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0" src="img/blog-3.jpg" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">Panen
                                Tomat dengan buah yang bagus
                            </a>
                        </div>

                        <div class="d-flex overflow-hidden">
                            <img class="img-fluid flex-shrink-0" src="img/blog-2.jpg" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">Penegcekan
                                hasil penanman wortel siap panen
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Recent Post End -->

                <!-- Plain Text Start -->
                <div>
                    <h2 class="mb-4">Tentang Blog</h2>
                    <div class="bg-primary text-center text-white" style="padding: 30px;">
                        <p>Blog ini dipersembahkan bagi para petani, penggiat agrikultur, dan semua orang yang ingin
                            menyelami dunia pertanian yang menjanjikan dan penuh peluang.
                            Temukan panduan dan kiat bertani yang efektif, pelajari teknologi terkini, dan dapatkan
                            inspirasi dari kisah sukses para petani inovatif.
                            Bergabunglah dengan komunitas dinamis kami untuk saling berbagi ilmu, pengalaman, dan
                            membangun jejaring yang saling menguntungkan.
                            Mari kita bersama-sama wujudkan masa depan pertanian yang lebih gemilang, berkelanjutan, dan
                            sejahtera!</p>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->


    <!-- 
    - #FOOTER
  -->

    <footer class="footer">
        <div class="container grid-list">

            <div class="footer-brand">

                <a href="#" class="logo">
                    <img src="./assets/images/logopetanimuda.png" width="74" height="24" alt="Adex home">
                </a>

                <p class="footer-text">
                    &copy; 2024 PT Bazma Corporation Berdikari. <br> All rights reserved.
                </p>

                <ul class="social-list">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-youtube"></ion-icon>
                        </a>
                    </li>

                </ul>

            </div>

            <ul class="footer-list">

                <li>
                    <p class="h4 footer-list-title">Alamat Kantor</p>
                </li>

                <li>
                    <address class="footer-text">
                        Jl. Suging Klabangkara , Tegal, Indonesia
                    </address>
                </li>

                <li>
                    <a href="mailto:info@email.com" class="footer-link">petanimilenial.indo@gmail.com</a>
                </li>

                <li>
                    <a href="tel:001234567890" class="footer-link">082324757905</a>
                </li>

            </ul>

            <ul class="footer-list">

                <li>
                    <p class="h4 footer-list-title">Selengkapnya</p>
                </li>

                <li>
                    <a href="#" class="footer-link">About Us</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Our Story</a>
                </li>

                <li>
                    <a href="#projek" class="footer-link">Projects</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Terms of Use</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Privacy Policy</a>
                </li>

            </ul>

            <div class="footer-list">

                <p class="h4 footer-list-title">Surat Kabar Kami</p>

                <p class="footer-text">
                    Berlangganan surat kabar kami untuk mendapatkan berita & penawaran kami dikirimkan kepada Anda.
                </p>

                <form action="send_email.php" method="post" class="input-wrapper">
                    <input type="email" name="email" placeholder="Alamat Email" required class="input-field">
                    <button type="submit" class="submit-btn">Gabung</button>
                </form>

            </div>

        </div>
    </footer>
    <!-- 
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>