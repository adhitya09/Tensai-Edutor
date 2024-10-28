<style>
@charset "utf-8";
/* CSS Document */

.form-bg {
    background-color: #e4e6e6;
    padding: 50px 0;
}

body {
    background-color: #e4e6e6;
    font-family: 'Roboto', sans-serif;
}

form {
    font-family: 'Roboto', sans-serif;
}

.form-horizontal .header {
    background-color: #F869DD;
    padding: 30px 25px;
    font-size: 30px;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    border-radius: 3px 3px 0 0;
}

.form-horizontal .heading {
    font-size: 16px;
    color: #F869DD;
    margin: 10px 0 20px 0;
    text-transform: capitalize;
}

.form-horizontal .form-content {
    padding: 25px;
    background-color: #fff;
    border-radius: 0 0 3px 3px;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
}

.form-horizontal .form-control {
    padding: 12px 16px;
    height: 50px;
    font-size: 14px;
    color: #2b2a2a;
    border: none;
    border-bottom: 2px solid #ccc;
    border-radius: 0;
    box-shadow: none;
    margin-bottom: 20px;
    transition: border-color 0.3s ease;
}

.form-horizontal .form-control:focus {
    border-color: #F869DD;
    box-shadow: none;
}

.form-horizontal textarea.form-control {
    resize: vertical;
    height: 130px;
}

.form-horizontal .control-label {
    font-size: 17px;
    color: #ccc;
    position: absolute;
    top: 5px;
    left: 27px;
    text-align: center;
}

.form-horizontal .btn {
    font-size: 18px;
    color: #4e4e4e;
    float: right;
    margin: 10px 0;
    border: 2px solid #ccc;
    border-radius: 0;
    padding: 10px 25px;
    transition: all 0.3s ease;
}

.form-horizontal .btn:hover {
    background-color: #fff;
    border-color: #F869DD;
    color: #F869DD;
}

.demo {
    padding: 100px 0;
}

.heading-title {
    margin-bottom: 50px;
    font-size: 24px;
    font-weight: bold;
    color: #F869DD;
    text-align: center;
}

@media (max-width: 768px) {
    .form-horizontal .header {
        font-size: 24px;
        padding: 20px;
    }

    .form-horizontal .btn {
        width: 100%;
        text-align: center;
        float: none;
    }

    .heading-title {
        font-size: 20px;
        margin-bottom: 40px;
    }
}

</style>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

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

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

 <section class="get-in-touch">
    <section class="get-in-touch">
        <div class="demo">
            <div class="demo form-bg">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <h1 class="heading-title"> TENSAI EDUTOR</h1>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <form class="form-horizontal" href="{{ route('pendaftaran') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="header">Formulir Pendaftaran</div>
                                <div class="form-content">
                                    <h4 class="heading">Detail Siswa</h4>
                                    <!-- Nama dan Jenis Kelamin -->
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="nama_siswa">Nama Siswa</label>
                                            <input class="form-control" id="nama_siswa" name='nama_siswa' placeholder="Nama Siswa" type="text" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nama_orang_tua">Nama Orang Tua</label>
                                            <input class="form-control" id="nama_orang_tua" name='nama_orang_tua' placeholder="Nama Orang Tua" type="text" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="tingkat_pendidikan">Tingkat Pendidikan</label>
                                            <input class="form-control" id="tingkat_pendidikan" name='tingkat_pendidikan' placeholder="SMA" type="text" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="asal_sekolah">Asal Sekolah</label>
                                            <input class="form-control" id="asal_sekolah" name='asal_sekolah' placeholder="SMA N 6" type="text" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="pilihan_hari">Pilihan Hari</label>
                                            <input class="form-control" id="pilihan_hari" name='pilihan_hari' type="text" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="pilihan_waktu">Pilihan Waktu</label>
                                            <input class="form-control" id="pilihan_waktu" name='pilihan_waktu' type="time" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="mata_pelajaran">Mata Pelajaran</label>
                                            <input class="form-control" id="mata_pelajaran" name='mata_pelajaran' placeholder="Mata Pelajaran" type="text" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="rencana_mulai_kelas">Mulai Kelas</label>
                                            <input class="form-control" id="rencana_mulai_kelas" name='rencana_mulai_kelas'  type="date" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nomor_telepon_siswa">Nomor Telepon Siswa</label>
                                            <input class="form-control" id="nomor_telepon_siswa" name='nomor_telepon_siswa' type="text" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nomor_telepon_orang_tua">Nomor Telepon Orang Tua</label>
                                            <input class="form-control" id="nomor_telepon_orang_tua" name='nomor_telepon_orang_tua' type="text" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="bukti_pembayaran">Bukti Pembayaran</label>
                                            <input class="form-control" id="bukti_pembayaran" name='bukti_pembayaran' type="file">
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="form-row">
                                        <div class="form-group col-md-12 text-right">
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>


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
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
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

</body>

</html>
