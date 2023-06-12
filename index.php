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

  <title>Bernady Land Slawu</title>
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
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.html"><span>Bernady Land Slawu</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="img/logo-bernady.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="index.php">Beranda</a></li>
          <li><a href="about.php">Tentang</a></li>
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



<!-- ======= Hero Section ======= -->

<section id="hero" class="d-flex justify-cntent-center align-items-center">

<div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">



<?php



if($userName = $_SESSION['name']){

    

echo "

<!-- Slide 1 -->

<div class='carousel-item active'>

<div class='carousel-container'>

<h2 class='animate__animated animate__fadeInDown'>Selamat Datang $userName di <span>Bernady Land Slawu</span></h2>

<p class='animate__animated animate__fadeInUp'>Hunian yang dirancang sebagai sebuah kota modern di masa depan dengan estetika yang modern dan futuristik memberikan kesan eksklusif.</p>

<a href='portfolio.php' class='btn-get-started animate__animated animate__fadeInUp'>Pesan Rumah</a>

</div>

</div>





";



}else{

echo "

<!-- Slide 1 -->

<div class='carousel-item active'>

<div class='carousel-container'>

<h2 class='animate__animated animate__fadeInDown'>Selamat Datang di <span>Bernady Land Slawu</span></h2>

<p class='animate__animated animate__fadeInUp'>Hunian yang dirancang sebagai sebuah kota modern di masa depan dengan estetika yang modern dan futuristik memberikan kesan eksklusif.</p>

<a href='portfolio.php' class='btn-get-started animate__animated animate__fadeInUp'>Pesan Rumah</a>

</div>

</div>





";

}



?>


    

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">The Heart of Jember</h2>
          <p class="animate__animated animate__fadeInUp">Terletak ditengah-tengah wilayah kota yang berbentuk menyerupai hati. Menghadirkan lingkungan yang bersih nan asri, Bernady Land Slawu dibangun dengan infrastruktur bawah tanah dan didukung water treatment plant untuk memenuhi kebutuhan air bersih penghuni.</p>
          <a href="portfolio.php" class="btn-get-started animate__animated animate__fadeInUp">Cari Rumah</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">City Outside Tranquility Inside</h2>
          <p class="animate__animated animate__fadeInUp">Mengusung konsep kawasan hijau yang bebas dari polusi, lebih sehat dan lebih asri serta alami memberikan aura positif dan semangat.</p>
          <a href="services.php" class="btn-get-started animate__animated animate__fadeInUp">Fasilitas</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Properti Baru</a></h4>
              <p class="description">Berada di pusat area residential Jember, yang akan menjadi pusat bisnis terbaru Kota Jember. Memenuhi berbagai kebutuhan anda dimulai dari furniture, seperti menggunakan Smart Lock.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="portfolio.html">Cluster Perumahan</a></h4>
              <p class="description">Berbagai macam Cluster yang sangat diimpikian diantaranya, Boluevard Magnolia, Camelia, Ege Gardenia, New Edge Gardenia, Pinewood, Plumeria, QBIX, Ruko, SOHO.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Pesan Rumah</a></h4>
              <p class="description">Segera miliki hunian nyaman dan bernilai investasi tinggi diberbagai Cluster unggulan dan  didukung dengan sistem keamanan 24 jam.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Fasilitas</a></h4>
              <p class="description">Bernady Land Slawu menghadirkan Mall, Hotel, SPBU, Bernady Camp, Cendani Park, Still Autocare dan lainnya.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="img/tumbnail-bernady.jpg" class="img-fluid" alt="">
            <a href="https://www.instagram.com/reel/CXhv1pyJMej/?utm_source=ig_web_copy_link" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Urban Activities </a></h4>
              <p class="description">Banyak kegiatan yang bisa kamu lakukan bersama temen, tetangga, atau saudara saat punya hunian dikawasan Bernady Land Slawu.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Pentingnya Ruang Terbuka Hijau</a></h4>
              <p class="description">Ruang Terbuka Hijau yang terdapat di setiap Cluster kawasan Bernady Land Slawu, memiliki banyak manfaat untuk tumbuh kembang keluarga dan lingkungan hidup yang sehat</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Pesan Kami</h4>
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

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Link</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Layanan</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Layanan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Properti Baru</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="pemesanan.php">Pesan Rumah</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="portfolio.html">Cluster Perumahan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Fasilitas</a></li>
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