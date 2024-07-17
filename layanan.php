<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 
    - primary meta tags
  -->
    <title>PetaniMilenial-MHS</title>
    <meta name="title" content="Adex">
    <meta name="description" content="This is a business agency html template made by codewithsadee">

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./assets/images/logopetanimuda.png" type="image/svg+xml">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

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
<!-- 
    - google font link
  -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">

<!-- 
    - custom css link
  -->
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="floatingWA.css">


<!-- 
    - preload images
  -->
<link rel="preload" as="image" href="./assets/images/hero-bg.jpg">
<link rel="preload" as="image" href="./assets/images/petani1-slide1.jpeg">
<link rel="preload" as="image" href="./assets/images/petani2-slide2.jpeg">
<link rel="preload" as="image" href="./assets/images/petani3-slide3.jpg">

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
    <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">

                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->







    <!-- 
        - #SERVICE
      -->

    <section id="layanan" class="section service" aria-labelledby="service-label">
        <div class="container">

            <p class="section-subtitle" id="service-label">APA YANG KITA LAKUKAN?</p>

            <h2 class="h2 section-title">
                Layanan yang kami tawarkan dirancang khusus untuk memenuhi kebutuhan Petani Milenial.
            </h2>

            <ul class="grid-list">

                <li>
                    <div class="service-card">

                        <div class="card-icon">
                            <ion-icon name="book" aria-hidden="true"></ion-icon>
                        </div>

                        <h3 class="h4 card-title">Pelatihan</h3>

                        <p class="card-text">
                            Edukasi implementasi masyarakat dengan pertanian modern yang mengunakan teknologi
                            dan smart farm.
                        </p>

                        <a href="pelatihan.php" class="btn-text">
                            <span class="span">Learn More</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>
                </li>

                <li>
                    <div class="service-card">

                        <div class="card-icon">
                            <ion-icon name="megaphone" aria-hidden="true"></ion-icon>
                        </div>

                        <h3 class="h4 card-title">Pemasaran</h3>

                        <p class="card-text">
                            Memanfaatkan platform untuk menaikan grade petani bukan cuma produsen mentah tapi
                            barang jadi.
                        </p>

                        <a href="pemasaran.php" class="btn-text">
                            <span class="span">Learn More</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>
                </li>

                <li>
                    <div class="service-card">

                        <div class="card-icon">
                            <ion-icon name="people" aria-hidden="true"></ion-icon>
                        </div>

                        <h3 class="h4 card-title">Komunitas</h3>

                        <p class="card-text">
                            Platform untuk berbincang santai pembahasan petani milenial terkini yang diperlukan.
                        </p>

                        <a href="https://wa.me/6282324757905" class="btn-text" target="_blank">
                            <span class="span">Learn More</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>
                </li>

                <li>
                    <div class="service-card">

                        <div class="card-icon">
                            <ion-icon name="pie-chart-outline" aria-hidden="true"></ion-icon>
                        </div>

                        <h3 class="h4 card-title">Riset Pasar</h3>

                        <p class="card-text">
                            Mengenal tren terkini pasar hasil pertanian, teknologi pertanian untuk masyarakat
                            dan kaum milenial.
                        </p>

                        <a href="risetpasar.php" class="btn-text">
                            <span class="span">Learn More</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>
                </li>

            </ul>

        </div>
    </section>


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

    <!-- Tombol Melayang -->
    <div class="floating-buttons">
        <a href="https://wa.me/6282324757905" class="whatsapp-button" target="_blank">
            <img src="./assets/images/logo_WA.svg" alt="WhatsApp">
        </a>
        <a href="https://www.facebook.com/bagazdwi.madrid" class="facebook-button" target="_blank">
            <img src="./assets/images/facebook.svg" alt="Facebook">
        </a>
    </div>



    <!-- 
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!-- 
    - ionicon
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>