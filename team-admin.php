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

  <title>Team - Bernady Land Slawu</title>
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
          <li><a class="" href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Layanan</a></li>
          <li><a href="portfolio.php">Cluster</a></li>
          <li><a class="active" href="team.php">Team</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <?php

if($userName = $_SESSION['name']){
  
  echo "

  <div class='dropdown'><a href='#'> $userName </a>
  <ul>
    <li><a href='logout.php'>Logout</a></li>
  </ul>
</div>

  ";

}else{
  echo "
  <li><a href='login.php'>Login</a></li>
  ";
}

?>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Our Team Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2> <blockquote> Our Team</blockquote> </h2>
          <style>
            blockquote {
              font-family: 'Times New Roman', Times, serif;
              font-size: larger;
            }
        </style>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Our Team</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Team Section ======= -->
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">
        <style>
          div.member {
            text-align: center;
          }
        </style>
        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/team/lisa.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://instagram.com/mmmutia?igshid=YTY2NzY3YTc="><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/mutia-budi-utami-014b16228"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Mutia Budi Utami</h4>
                <span>E31210521</span>
                <p>Kalo Orang Lain Bisa Ngoding, Yauda Orang Lain Aja<br>-Muti 2022</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/team/jennie.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://instagram.com/ellaerwita?igshid=YTY2NzY3YTc="><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/ela-erwita-sisilia-507289258"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ella Erwita Sisilia</h4>
                <span>E31210385</span>
                <p>Jika Masa Depan Tergantung Pada Mimpimu, Maka Perbanyaklah Tidur!</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/team/rose.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://instagram.com/ardellaa_?igshid=YTY2NzY3YTc="><i class="bi bi-instagram"></i></a>
                  <a href="https://instagram.com/ardellaa_?igshid=YTY2NzY3YTc="><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ardella Setya Maharany</h4>
                <span>E31210141</span>
                <p>Singkat, padat, jelas <br>Gak Goodloking <br>Gak di Posting!</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/team/jisoo.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://instagram.com/ferinaiintan_?igshid=YTY2NzY3YTc="><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/ferina-intan-3a07a7258"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ferina Intan Nor Alifah</h4>
                <span>E31210351</span>
                <p>Kuliah Lo Ambil Apa? Gue Sih Ambil Hikmahnya Aja wkwkwk</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/team/psy.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://instagram.com/daffaizath12_?igshid=YTY2NzY3YTc="><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Daffa I'Zaaz Agung Theola</h4>
                <span>E31210382</span>
                <p>Masa Depan Itu Seperti Sekumpulan Tempe, Tidak Ada Yang Tahu.</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
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
                  <h4>Useful Links</h4>
                  <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="services.php">Services</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                  </ul>
                </div>
      
                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Our Services</h4>
                  <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="services.php">Properti Baru</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="pemesanan.php">Pesan Rumah</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="portfolio.php">Cluster Perumahan</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="services.php">Fasilitas</a></li>
                  </ul>
                </div>
      
                <div class="col-lg-3 col-md-6 footer-contact">
                  <h4>Contact Us</h4>
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
      
      </body>
      
      </html>