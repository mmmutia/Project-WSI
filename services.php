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

  <title>Services - Bernady Land Slawu</title>
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
        <!-- <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="img/logo-bernady.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="index.php">Beranda</a></li>
          <li><a href="about.php">Tentang</a></li>
          <li><a class="active" href="services.php">Layanan</a></li>
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
      <li> <a href='proggres.php'>Proggres</a></li>        
      <li> <a href='daftar-cluster-tersimpan.php'>Cluster Yang Tersimpan</a></li>
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

    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><blockquote>Layanan Kami</blockquote></h2>
          <style>
            blockquote {
              font-family: 'Times New Roman', Times, serif;
              font-size: larger;
            }
        </style>
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li>Layanan</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="portfolio.php">Properti Baru</a></h4>
              <p class="description">Berada di pusat area residential Jember, yang akan menjadi pusat bisnis terbaru Kota Jember. Memenuhi berbagai kebutuhan anda dimulai dari furniture, seperti menggunakan Smart Lock.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="portfolio.php">Cluster Perumahan</a></h4>
              <p class="description">Berbagai macam Cluster yang sangat diimpikian diantaranya, Boluevard Magnolia, Camelia, Ege Gardenia, New Edge Gardenia, Pinewood, Plumeria, QBIX, Ruko, SOHO.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="portfolio.php">Pesan Rumah</a></h4>
              <p class="description">Segera miliki hunian nyaman dan bernilai investasi tinggi diberbagai Cluster unggulan dan  didukung dengan sistem keamanan 24 jam.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="services.php">Fasilitas</a></h4>
              <p class="description">Bernady Land Slawu menghadirkan Mall, Hotel, SPBU, Bernady Camp, Cendani Park, Still Autocare dan lainnya.</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <!-- <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="img/why-us.jpg" class="img-fluid" alt="">
            <a href="https://www.instagram.com/reel/CXhv1pyJMej/?utm_source=ig_web_copy_link" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

          </div>
        </div>

      </div>
    </section>End Why Us Section -->

    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="img/mall.jpeg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Mall</a></h5>
                <p class="card-text">Menjadi pusat perbelanjaan yang secara arsitektur berupa bangunan tertutup dengan suhu yang diatur dan memiliki jalur untuk berjalan jalan yang teratur sehingga berada di antara antar toko-toko kecil yang saling berhadapan yang memudahkan penghuni Bernady Land untuk berbelanja kebutuhan sehari-hari</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="img/hotel.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Hotel</a></h5>
                <p class="card-text">Menjadikan sebuah bangunan atau usaha yang menyediakan jasa inap dan juga menyediakan makanan dan minuman bagi tamu yang datang serta mempunyai fasilitas jasa lannya. Yang mana semua fasilitasnya juga di peruntukkan bagi masyarakat umum.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="img/spbu.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">SPBU</a></h5>
                <p class="card-text">(Stasiun Pengisian Bahan Bakar untuk Umum) merupakan prasarana umum yang disediakan oleh PT. Pertamina untuk masyarakat luas guna memenuhi kebutuhan bahan bakar. Pada umumnya SPBU menjual bahan bakar sejenis premium, solar, pertamax dan pertamax plus.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="img/cendani-park.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Cendani Park</a></h5>
                <p class="card-text">Sebuah area yang mempunyai ruang dalam berbagai kondisi. Kondisi yang dimaksud diantaranya lokasi, ukuran atau luasan, iklim, dan kondisi khusus lainnya seperti tujuan serta fungsi spesifik dari pembangunan taman.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="img/bernady-camp.jpeg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Bernady Camp</a></h5>
                <p class="card-text">Merupakan lokasi untuk mendirikan tenda dan melakukan kegiatan berkemah, berupa ruang luas di luar ruangan.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="img/stil-autocare.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">STIL Autocare</a></h5>
                <p class="card-text">Sebagai tempat dimana di dalamnya terjadi aktifitas kegiatan perbengkelan yang meliputi perawatan guna menjaga keawetan mobil dan perbaikan guna memperbaiki segala sesuatu yang rusak pada mobil, sehingga kondisi mobil kembali baik dan sempurna.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Service Details Section -->

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