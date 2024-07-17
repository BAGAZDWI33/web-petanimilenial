<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PetaniMilenial-MHS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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
</head>

<body>

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
    <link rel="stylesheet" href="./assets/css/galeri.css">
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
        <!--navbar-->




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




        <!-- Team Start -->
        <div class="gallery">
            <?php
            $directory = './assets/images/galeri/';
            $images = glob($directory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

            foreach ($images as $image) {
                echo '<div class="gallery-item">';
                echo '<img src="' . $image . '" alt="Gallery Image">';
                echo '</div>';
            }
            ?>
        </div>
        <!-- Team End -->


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

    <!-- 
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!-- 
- ionicon
-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</html>