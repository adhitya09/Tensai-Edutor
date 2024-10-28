<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="shortcut icon" href="{{ asset('assets/img/logote.png') }}" type="">

  <title>Tensai Edutor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-rounded/css/uicons-regular-rounded.css'>

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->


  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Tensai Edutor</h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/price">Price</a></li>
          <li><a href="/gallery">Gallery</a></li>
          <li><a href="/teacher">Teacher Profile</a></li>
          <li><a href="/contact">Contact</a></li>
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          <li><a href="/pendaftaran">Pendaftaran</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Cerdas Bersama <span>Tensai Edutor</span></h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="/pendaftaran" class="btn-get-started">Daftar Sekarang</a>
            {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/logote.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="fi fi-rr-edit"></i></div>
              <h4 class="title"><a class="stretched-link">Pendaftaran Mudah</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="fi fi-rr-usd-circle"></i></div>
              <h4 class="title"><a class="stretched-link">Harga Terjangkau</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="fi fi-rr-star"></i></div>
              <h4 class="title"><a class="stretched-link">Pelayanan Terbaik</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="fi fi-rr-user"></i></div>
              <h4 class="title"><a class="stretched-link">Pengajar Profesional</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>Bimbingan Belajar Private Tensai Edutor</h3>
            <img src="assets/img/abt.png" class="img-fluid rounded-4 mb-4" alt="">
           <p> Tensai Edutor adalah bimbingan belajar yang bergerak dibidang private class atau bimbingan private</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                MENGAPA LES
                PRIVAT ?
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Bagi Siswa, Guru Les Privat Datang ke rumah salah satu solusi yang efektif dan efisien ketika mengalami kesulitan dalam pembelajaran di sekolah yang akibatnya nilai ujian tidak sesuai harapan, sehingga akan berimbas pada ketidakpercayaan siswa akan kemampuannya sendiri.</li>
                <li><i class="bi bi-check-circle-fill"></i> Selain itu Tutor lebih intensif secara personal membimbing perkembangan belajar anak sehingga anak lebih mudah konsentrasi • Fleksibilitas waktu belajar yang dapat ditentukan sendiri</li>
                <li><i class="bi bi-check-circle-fill"></i> Menghemat waktu dan tenaga untuk transportasi</li>
              </ul>

              <div class="position-relative mt-4">
                <img src="assets/img/abt2.png" class="img-fluid rounded-4" alt="">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Harga</h2>
        </div>

        <div class="row g-4 py-lg-5 justify-content-center" data-aos="zoom-out" data-aos-delay="100">

            <div class="col-lg-4">
                <div class="pricing-item featured">
                    <h3>MULAI DARI</h3>
                    <div class="icon">
                        <i class="bi bi-book"></i>
                    </div>

                    <h4><sup>Rp</sup>200.000,00<span> / Bulan</span></h4>
                    <ul>
                        <li><i class="bi bi-check"></i>  1x Seminggu  </li>
                        <li><i class="bi bi-check"></i> Rp50.000/pertemuan</li>
                        <li><i class="bi bi-check"></i>1.5jam/sesi  </li>
                    </ul>
                    <div class="text-center"><a href="/price" class="buy-btn">Lihat Paket Harga Lain</a></div>
                </div>
            </div><!-- End Pricing Item -->

        </div>
    </div>
</section><!-- End Pricing Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Galeri</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Calistung/TK</li>
              <li data-filter=".filter-product">SD</li>
              <li data-filter=".filter-branding">SMP</li>
              <li data-filter=".filter-books">SMA/MAN</li>
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <a href="assets/img/c1.png" data-gallery="portfolio-gallery-app" class="glightbox">
                        <img src="assets/img/c1.png" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html" title="More Details">Calistung</a></h4>
                        <p>Setelah anak saya ikut calistung di Tensai Edutor, anak saya jadi juara olimpiade membaca</p>
                    </div>
                </div>
            </div><!-- End Portfolio Item -->


            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/sd1.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/sd1.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">SD</a></h4>
                    <p>Anak saya jadi pintar matematika dan jadi juara kelas</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/smp1.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/smp1.png" class="img-fluid" alt=""></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/img/sma1.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/sma1.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/c2.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/c2.png" class="img-fluid" alt=""></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/sd2.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/sd2.png" class="img-fluid" alt=""></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/smp2.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/smp2.png" class="img-fluid" alt=""></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/img/sma2.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/sma2.png" class="img-fluid" alt=""></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/c3.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/c3.png" class="img-fluid" alt=""></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/sd3.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/sd3.png" class="img-fluid" alt=""></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/smp3.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/smp3.png" class="img-fluid" alt=""></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/img/sma3.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/sma3.png" class="img-fluid" alt=""></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Team Pengajar</h2>
        </div>
        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <h4>Walter White</h4>
              <span>Web Development</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Marketing</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <h4>William Anderson</h4>
              <span>Content</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->
          <br>
            <a href="/teacher" class="readmore stretched-link">Selengkapnya <i class="bi bi-arrow-right"></i></a>
        </br>
        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Pertanyaan Yang Sering <strong>Muncul</strong></h3>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    Apakah pengajar profesional?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Ya, pengajar yang kami usung sangat profesional dibidangnya karena telah diuji terlebih dahulu
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Apakah ada biaya transportasi tambahan untuk pengajar yang datang kerumah?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Tidak ada, semua sudah ditanggung oleh Tensai Edutor
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Apakah bisa mengganti jadwal secara tiba-tiba jika ada urusan mendadak?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Tentu bisa, karena kami lebih mengutamakan kepuasan pelanggan
                  </div>
                </div>
              </div><!-- # Faq item-->
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Blog</h2>
        </div>

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/t1.png" alt="" class="img-fluid">
              </div>

              <p class="post-category">Matematika</p>

              <h2 class="title">
                <a href="https://www.instagram.com/reel/Ca4jhHaLjOE/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank">Trik Cepat Mengubah Pecahan campuran ke Desimal</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/logote.png" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Tensai Edutor</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">9 Maret 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/t2.png" alt="" class="img-fluid">
              </div>

              <p class="post-category">Matematika</p>

              <h2 class="title">
                <a href="https://www.instagram.com/reel/Ca1eDwpMbrX/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank">Tips & Trik Matematika Cara cepat mengerjakan Kuadrat </a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/logote.png" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Tensai Edutor</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">8 Maret 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/t3.png" alt="" class="img-fluid">
              </div>

              <p class="post-category">Matematika</p>

              <h2 class="title">
                <a href="https://www.instagram.com/reel/Ca4h_o9MNuy/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==" target="_blank">Cara gampang perkalian 11 dengan 2 digit</a>
              </h2>

              <br>
              <div class="d-flex align-items-center">
                <img src="assets/img/logote.png" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Tensai Edutor</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">9 Maret 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Kontak</h2>
          </div>

          <div class="row gx-lg-5 gy-4"> <!-- Added extra spacing with gx-lg-5 -->

            <div class="col-lg-6">

              <div class="info-container d-flex flex-column align-items-center justify-content-center">
                <div class="info-item d-flex">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h4>Lokasi:</h4>
                    <p>Balikpapan, Samarinda, Tenggarong</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-instagram flex-shrink-0"></i>
                  <div>
                    <h4>Instagram:</h4>
                    <p><a href="https://www.instagram.com/tensaiedutorprivate?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" style="color: white;">@tensaiedutorprivate</a></p>
                </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-phone flex-shrink-0"></i>
                  <div>
                    <h4>No. Telpon:</h4>
                    <p>+62 8225-0491-293</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-clock flex-shrink-0"></i>
                  <div>
                    <h4>Jam Kerja:</h4>
                    <p>Senin-Jumat: 10AM - 6PM</p>
                  </div>
                </div><!-- End Info Item -->
              </div>

            </div>

            <div class="col-lg-6 text-center"> <!-- Added class text-center -->
              <!-- Adjusted column size to accommodate the map -->
              <div class="rounded">
                <iframe class="rounded w-100" style="height: 450px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.881167199872!2d116.89229767364681!3d-1.241866335576424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df145d8804642cf%3A0x4d0f7632df471b71!2sJl.%20Abdi%20Praja%2C%20Sepinggan%2C%20Kecamatan%20Balikpapan%20Selatan%2C%20Kota%20Balikpapan%2C%20Kalimantan%20Timur%2076115!5e0!3m2!1sen!2sid!4v1710854691995!5m2!1sen!2sid" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Tensai Edutor</span>
          </a>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/price">Price</a></li>
            <li><a href="/gallery">Gallery</a></li>
            <li><a href="/teacher">Teacher Profile</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a>Calistung/TK</a></li>
            <li><a>SD</a></li>
            <li><a>SMP</a></li>
            <li><a>SMA/MAN</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Balikpapan<br>
            Samarinda<br>
            Tenggarong<br><br>
            <strong>Phone:</strong>+62 8225-0491-293<br>
            <strong>Email:</strong> tensaiedutor@gmail.com.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Tensai Edutor</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        <a href="https://bootstrapmade.com/"></a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{asset("assets/vendor/aos/aos.js") }}"></script>
  <script src="{{asset("assets/vendor/glightbox/js/glightbox.min.js") }}"></script>
  <script src="{{asset("assets/vendor/purecounter/purecounter_vanilla.js") }}"></script>
  <script src="{{asset("assets/vendor/swiper/swiper-bundle.min.js") }}"></script>
  <script src="{{asset("assets/vendor/isotope-layout/isotope.pkgd.min.js") }}"></script>
  <script src="{{asset("assets/vendor/php-email-form/validate.js") }}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset("assets/js/main.js") }}"></script>
   {{-- js gallery --}}
   <script>
    // Gunakan jQuery atau JavaScript murni untuk menangani perilaku saat gambar di-klik
    $(document).ready(function() {
        // Atur perilaku saat gambar di-klik menggunakan Lightbox atau plugin serupa
        $('.portfolio-wrap a').on('click', function(event) {
            event.preventDefault(); // Menghentikan tindakan bawaan link

            var $portfolioItem = $(this).closest('.portfolio-item'); // Ambil portfolio item terdekat
            var $portfolioInfo = $portfolioItem.find('.portfolio-info'); // Cari elemen portfolio-info di dalamnya

            // Tampilkan informasi tambahan jika belum ditampilkan, atau sebaliknya
            $portfolioInfo.slideToggle();
        });
    });
</script>



</body>

</html>
