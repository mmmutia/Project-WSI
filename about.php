<?php  
require('koneksi.php');
session_start();
error_reporting(0);

$userName = $_SESSION['name']; 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About - Bernady Land Slawu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/logo-bernady.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.10.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.php"><span>Moderna</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="img/logo-bernady.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
      
                  <ul>
                  <li><a class="" href="index.php">Beranda</a></li>
                  <li><a class="active" href="about.php">Tentang</a></li>
                  <li><a href="services.php">Layanan</a></li>
                  <li><a href="portfolio.php">Cluster</a></li>
                  <li><a href="team.php">Tim</a></li>
                  <li><a href="contact.php">Kontak</a></li>
                  <?php

if($userName = $_SESSION['name']){
  
  echo "
  <div class='dropdown' style='margin-right:50px;><a href='#'> 
          <a href='#' style='text-decoration: none; color: white;'>
            <img src='img/logo_orang.png' alt='Logo Orang' style='width: 20px; height: 20px; margin-right: 5px; display: inline-block;'>
            <span style='font-size: 14px; display: inline-block;'>$userName</span>
          </a>
          <ul>
      <li> <a href='profile-user.php'>Profil</a></li>
      <li> <a href='list-pemesanan.php'>Pemesanan Rumah</a></li>
      <li> <a href='pembayaran-customer.php'>Pembayaran</a></li>
      <li> <a href='proggres_user.php'>Proggres</a></li>
      <li> <a href='daftar-cluster-tersimpan.php'>Cluster Tersimpan</a></li>
      <li data-bs-toggle='modal' data-bs-target='#modalLogout'> <a href='javascript:void(0)'>Logout</a></li>
    </ul>
  </div>
  ";


}else{
  echo "
  <a href='login.php' style='text-decoration: none; color: white;'>
                      <img src='img/logo_orang.png' alt='Logo Orang' style='width: 20px; height: 20px; margin-right: 5px; display: inline-block;'>
                      <span style='font-size: 14px; display: inline-block;'>Login</span>
                    </a>
  ";
}

?>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><blockquote> Tentang Bernady</blockquote></h2>
          <style>
            blockquote {
              font-family: 'Times New Roman', Times, serif;
              font-size: larger;
            }
        </style>
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li>Tentang Bernady</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="img/bg-bernady.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Bernady Land Slawu</h3><br>
            <p class="fst-italic">
             Terletak di tengah-tengah wilayah Kota yang berbentuk menyerupai hati menjadikan kawasan Bernady Land Slawu sebagai pusat dimana 
             hati sebagai tempat yang paling nyaman berada. Hunian yang dibuat dengan estetika yang modern dan futuristik memberikan kesan ekslusif. 
             Kawasan hijau yang masih alami serta asri memberikan aura positif dan semangat. Tidak hanya sebagai rumah, kami membangun impian dimana 
             semua orang menjadikan hati sebagai awal dan tujuan.
            </p>
           
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Camelia</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Pinewood</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Plumeria</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Gardenia</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Our Skills Section ======= -->
    <section class="skills" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Rumah Modern Minimalis & Strategis Bernady Land Slawu</h2>
          <p>Kawasan rumah exclusive di tengah Kota Jember. Dengan bangunan berkualitas dari developer yang terpercaya.Kawasan yang memiliki sirkulasi udara lebih sejuk dan lokasi yang nyaman. </p>
        </div>
   

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Camelia <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Pinewood <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Plumeria <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">QBIX<i class="val">55%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Skills Section -->

    <!-- ======= Tetstimonials Section ======= -->
    <section class="testimonials" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Bernady Land Slawu</h2>
          <p>Menjadikan kawasan Bernady Land Slawu sebagai pusat dimana hati sebagai tempat paling nyaman berada - Bernady Land Slawu</p>
        </div>

        <div class="section-title">
          <p>Perumahan Bernady Land Jember Hunian mewah dengan view pegunungan, design nuansa Bali, dan lokasi strategis dekat dengan pusat kota. Dengan akses jalan yang ekstra lebar, hunian ini merupakan investasi properti terbaik di kota Jember. Karena Bernady Land Slawu di kembangkan menjadi kawasan kota mandiri di Jember.</p>
          </div>

      </div>
    </section><!-- End Ttstimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>esan Kami</h4>
            <p>The Heart of Jember| Perumahan Bernady Land Slawu mempunyai visi untuk memberikan fasilitas sebanyak - banyaknya kepada seluruh masyarakat Indonesia yang belum mempunyai rumah.</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="footer-top">
            <div class="container">
              <div class="row">
      
                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Link</h4>
                  <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="index.php">Beranda</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="about.php">Tentang</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="services.php">Layanan</a></li>
                  </ul>
                </div>
      
                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Layanan</h4>
                  <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="services.php">Properti Baru</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="pemesanan.php">Pesan Rumah</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="portfolio.php">Cluster Perumahan</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="services.php">Fasilitas</a></li>
                  </ul>
                </div>
      
                <div class="col-lg-3 col-md-6 footer-contact">
                  <h4>Kontak</h4>
                  <p>
                    Jl. Koptu Berlian, Lingkungan Krajan Timur, Tegalgede, Kec. Sumbersari, Kabupaten Jember, Jawa Timur <br>
                    68126<br>
                    Indonesia <br><br>
                    <strong>Phone:</strong> +62 812 3123 0899<br>
                    <strong>Email:</strong> bernadylandslawu@gmail.com<br>
                  </p>
      
                </div>
      
                <div class="col-lg-3 col-md-6 footer-info">
                  <h3>About Bernady Land Slawu</h3>
                  <p>The Heart of Jember</p>
                  <p>Perumahan Bernady Land Slawu mempunyai visi untuk memberikan fasilitas sebanyak - banyaknya kepada seluruh masyarakat Indonesia yang belum mempunyai rumah.</p>
                  <div class="social-links mt-3">
                    <a href="https://wa.me/6281231230899" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                    <a href="https://m.facebook.com/people/Bernady-Land-Slawu/100067127194394/" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://instagram.com/bernadylandslawu?igshid=YTY2NzY3YTc=" class="instagram"><i class="bx bxl-instagram"></i></a>
                  </div>
                </div>
      
              </div>
            </div>
          </div>
      
          <div class="container">
            <div class="copyright">
              &copy; Copyright <strong><span>Bernady Land Slawu</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
              Designed by <a href="https://bootstrapmade.com/">The Heart Of Jember</a>
            </div>
          </div>
        </footer><!-- End Footer -->
      
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

              <div class="modal fade" id="modalLogout">
          <div class="modal-dialog">
            <div class="modal-content" style="margin-top:100px;">
                <div class="modal-header">
                  <h4 class="modal-title" style="text-align:center;">Apakah Yakin Ingin Logout</h4>
                </div>
                <div class="modal-body">Pilih "Logout" dibawah jika anda yakin ingin logout.</div>
                <div class="modal-footer">
                  <a href="logout.php" class="btn btn-danger btn-sm" id="logout_link">Logout</a>
                  <button type="button" class="btn btn-success btn-sm" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
          </div>
        </div>
      
        <!-- Vendor JS Files -->
        <script src="vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="vendor/aos/aos.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/glightbox/js/glightbox.min.js"></script>
        <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="vendor/swiper/swiper-bundle.min.js"></script>
        <script src="vendor/waypoints/noframework.waypoints.js"></script>
        <script src="vendor/php-email-form/validate.js"></script>
      
        <!-- Template Main JS File -->
        <script src="js/main.js"></script>

        <script type="text/javascript">
          function confirmLogout(logout_url){
            $('#modalLogout').modal('show', {backdrop: 'static'});
            document.getElementById('logout_link').setAttribute('href', logout_url);
          }
        </script>
      
      </body>
      
      </html>