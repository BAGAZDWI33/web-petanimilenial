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

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/062ddcdbf7.js" crossorigin="anonymous"></script>
    <!-- akhir fontawesome -->

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





    <main>
        <article>

            <!-- 
        - #HERO
      -->

            <section id="home" class="section hero has-bg-image" aria-label="home" style="background-image: url('./assets/images/hero-bg.jpg')">
                <div class="container">

                    <div class="hero-content">

                        <h1 class="h1 hero-title">Pertanian Modern Untuk Generasi Milenial.</h1>

                        <p class="hero-text">
                            Memberdayakan masyarakat desa sebagai petani muda dengan alat dan pengetahuan terkini,
                            menggabungkan cultur masyarakat kearifan lokal dengan teknologi.
                        </p>

                        <div class="btn-wrapper">

                            <a href="Register.php" class="btn btn-primary">Jelajahi</a>

                            <a href="contact.php" class="btn btn-outline">Kontak Kami</a>

                        </div>

                    </div>

                    <div class="hero-slider" data-slider>

                        <div class="slider-inner">
                            <ul class="slider-container" data-slider-container>

                                <li class="slider-item">

                                    <figure class="img-holder" style="--width: 575; --height: 550;">
                                        <img src="./assets/images/petani1-slide1.jpeg" width="575" height="550" alt="" class="img-cover">
                                    </figure>

                                </li>

                                <li class="slider-item">

                                    <div class="hero-card">
                                        <figure class="img-holder" style="--width: 575; --height: 550;">
                                            <img src="./assets/images/petani2-slide2.jpeg" width="575" height="550" alt="hero banner" class="img-cover">
                                        </figure>

                                        <button class="play-btn" aria-label="play adex intro">
                                            <ion-icon name="play" aria-hidden="true"></ion-icon>
                                        </button>
                                    </div>

                                </li>

                                <li class="slider-item">

                                    <figure class="img-holder" style="--width: 575; --height: 550;">
                                        <img src="./assets/images/petani3-slide3.jpg" width="575" height="550" alt="" class="img-cover">
                                    </figure>

                                </li>

                            </ul>
                        </div>

                        <button class="slider-btn prev" aria-label="slide to previous" data-slider-prev>
                            <ion-icon name="arrow-back"></ion-icon>
                        </button>

                        <button class="slider-btn next" aria-label="slide to next" data-slider-next>
                            <ion-icon name="arrow-forward"></ion-icon>
                        </button>

                    </div>

                </div>
            </section>





            <!-- 
        - #SERVICE
      -->

            <section id="layanan" class="section service" aria-labelledby="service-label">
                <div class="container">

                    <p class="section-subtitle" id="service-label">APA YANG KITA LAKUKAN ?</p>

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
                                    <span class="span">Selengkapnya</span>

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
                                    <span class="span">Selengkapnya</span>

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
                                    <span class="span">Selengkapnya</span>

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
                                    <span class="span">Selengkapnya</span>

                                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                </a>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>





            <!-- 
        - #ABOUT
      -->

            <section class="about" aria-labelledby="about-label">
                <div class="container">

                    <figure class="about-banner">
                        <img src="./assets/images/prosestraktor1.jpg" width="800" height="580" loading="lazy" alt="about banner" class="w-100">
                    </figure>

                    <div class="about-content">

                        <p class="section-subtitle" id="about-label">Mengapa Memilih Kami ?</p>

                        <h2 class="h2 section-title">
                            Kami memberikan solusi untuk membuat hidup lebih mudah bagi klien.
                        </h2>

                        <ul>

                            <li class="about-item">
                                <div class="accordion-card expanded" data-accordion>

                                    <h3 class="card-title">
                                        <button class="accordion-btn" data-accordion-btn>
                                            <ion-icon name="chevron-down-outline" aria-hidden="true" class="down">
                                            </ion-icon>

                                            <spna class="span h5">Professional Design</spna>
                                        </button>
                                    </h3>

                                    <p class="accordion-content">
                                        Bekerjasama untuk membuat desain web penjualan para patner komunitas.
                                    </p>

                                </div>
                            </li>

                            <li class="about-item">
                                <div class="accordion-card" data-accordion>

                                    <h3 class="card-title">
                                        <button class="accordion-btn" data-accordion-btn>
                                            <ion-icon name="chevron-down-outline" aria-hidden="true" class="down">
                                            </ion-icon>

                                            <spna class="span h5">Top-Notch Support</spna>
                                        </button>
                                    </h3>

                                    <p class="accordion-content">
                                        Market penanaman dan hasil pertanian yang mewah dan kelas atas.
                                    </p>

                                </div>
                            </li>

                            <li class="about-item">
                                <div class="accordion-card" data-accordion>

                                    <h3 class="card-title">
                                        <button class="accordion-btn" data-accordion-btn>
                                            <ion-icon name="chevron-down-outline" aria-hidden="true" class="down">
                                            </ion-icon>

                                            <spna class="span h5">Exclusive Assets</spna>
                                        </button>
                                    </h3>

                                    <p class="accordion-content">
                                        Mentor yang profesional dengan bimbingan lapangan dan konsultasi langsung.
                                    </p>

                                </div>
                            </li>

                        </ul>

                    </div>

                </div>
            </section>





            <!-- 
        - #FEATURE
      -->

            <section class="section feature" aria-labelledby="feature-label">
                <div class="container">

                    <figure class="feature-banner">
                        <img src="./assets/images/prosestraktor3.jpg" width="800" height="531" loading="lazy" alt="feature banner" class="w-100">
                    </figure>

                    <div class="feature-content">

                        <p class="section-subtitle" id="feautre-label">Solusi kami</p>

                        <h2 class="h2 section-title">
                            Kami membuka peluang untuk menaikan level pertanian anda menuju kelas atas.
                        </h2>

                        <p class="section-text">
                            Dengan menyediakan akses terhadap teknologi pertanian terbaru dan solusi inovatif. Kami
                            mengintegrasikan kearifan lokal dengan praktik modern untuk meningkatkan produktivitas,
                            efisiensi, dan keberlanjutan pertanian.
                        </p>

                        <ul class="feature-list">

                            <li>
                                <div class="feature-card">

                                    <div class="card-icon">
                                        <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                                    </div>

                                    <span class="span">
                                        Sumber bahan tani murah dan terjangkau.
                                    </span>

                                </div>
                            </li>

                            <li>
                                <div class="feature-card">

                                    <div class="card-icon">
                                        <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                                    </div>

                                    <span class="span">
                                        Relasi dengan petani profesional dibidangnya.
                                    </span>

                                </div>
                            </li>

                            <li>
                                <div class="feature-card">

                                    <div class="card-icon">
                                        <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                                    </div>

                                    <span class="span">
                                        Market yang luas dan higt value.
                                    </span>

                                </div>
                            </li>

                            <li>
                                <div class="feature-card">

                                    <div class="card-icon">
                                        <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                                    </div>

                                    <span class="span">
                                        Penggunaan teknologi digital untuk meningkatkan efisiensi pengelolaan pertanian.
                                    </span>

                                </div>
                            </li>

                        </ul>

                    </div>

                </div>
            </section>





            <!-- 
        - #STATS
      -->

            <section class="stats" aria-label="our stats">
                <div class="container">

                    <ul class="stats-card has-bg-image" style="background-image: url('./assets/images/stats-bg.jpg')">

                        <li>
                            <p class="card-text">
                                <span class="h1">7518</span>

                                <spna class="span">Proyek Selesai</spna>
                            </p>
                        </li>

                        <li>
                            <p class="card-text">
                                <span class="h1">3472</span>

                                <spna class="span">Pelanggan Puas</spna>
                            </p>
                        </li>

                        <li>
                            <p class="card-text">
                                <span class="h1">2184</span>

                                <spna class="span">Orang Berpengalaman</spna>
                            </p>
                        </li>

                        <li>
                            <p class="card-text">
                                <span class="h1">4523</span>

                                <spna class="span">Penghargaan</spna>
                            </p>
                        </li>

                    </ul>

                </div>
            </section>





            <!-- 
        - #PROJECT
      -->

            <section id="projek" class="section project" aria-labelledby="project-label">
                <div class="container">

                    <p class="section-subtitle" id="project-label">Study Kasus</p>

                    <h2 class="h2 section-title">
                        Lihat beberapa proyek luar biasa kami dengan ide kreatif dan desain hebat.
                    </h2>

                    <ul class="grid-list">

                        <li>
                            <div class="project-card">

                                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                                    <img src="./assets/images/ppp.jpg" width="560" height="350" loading="lazy" alt="Ligula tristique quis risus" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <h3 class="h3">
                                        <a href="#" class="card-title">Pembuatan Website</a>
                                    </h3>

                                    <p class="card-text">
                                    Di era digital ini, website menjadi alat penting untuk menjangkau khalayak luas dan membangun brand yang kuat.
                                    Bagi para pelaku usaha di bidang pertanian, memiliki website dapat memberikan banyak manfaat.
                                    </p>

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                                            <time class="meta-text" datetime="2022-04-14">14 Apr 2024</time>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>

                                            <span class="meta-text">Coding</span>
                                        </li>

                                    </ul>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="project-card">

                                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                                    <img src="./assets/images/pp.jpg" width="560" height="350" loading="lazy" alt="Nullam id dolor elit id nibh" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <h3 class="h3">
                                        <a href="#" class="card-title">Pembahasan Materi dan Resource</a>
                                    </h3>

                                    <p class="card-text">
                                    Bergabunglah bersama kami dalam perjalanan untuk menjelajahi kekayaan materi dan sumber daya web yang berkaitan dengan pertanian.
                                    Temukan informasi yang Anda butuhkan untuk mengembangkan usaha tani Anda, meningkatkan hasil panen, dan berkontribusi pada ketahanan pangan.
                                    </p>

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                                            <time class="meta-text" datetime="2022-03-29">29 Mar 2024</time>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>

                                            <span class="meta-text">Workspace</span>
                                        </li>

                                    </ul>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="project-card">

                                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                                    <img src="./assets/images/p.jpg" width="560" height="350" loading="lazy" alt="Ultricies fusce porta elit" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <h3 class="h3">
                                        <a href="#" class="card-title">Pertemuan Dengan Tenaga Ahli Pertanian</a>
                                    </h3>

                                    <p class="card-text">
                                    Dengan mengikuti pertemuan ini, diharapkan para petani dapat meningkatkan pengetahuan dan keterampilannya dalam mengelola lahan pertanian secara efektif dan efisien, sehingga dapat meningkatkan produktivitas dan pendapatan mereka.
                                    </p>

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                                            <time class="meta-text" datetime="2022-02-26">26 Feb 2024</time>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>

                                            <span class="meta-text">Meeting</span>
                                        </li>

                                    </ul>

                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>





            <!-- 
        - #CTA
      -->

            <section class="cta" aria-label="call to action">
                <div class="container">

                    <h2 class="h2 section-title">
                        Bergabung dengan komunitas kami dengan menggunakan layanan dan perkembangan bisnis Petani Anda.
                    </h2>

                    <a href="https://chat.whatsapp.com/Gi5GDh1zNm48uhl8Reh7YP" class="btn btn-primary">Free Gabung</a>
                </div>
            </section>

        </article>
    </main>





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