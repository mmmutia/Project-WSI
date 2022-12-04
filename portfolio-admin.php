<?php  
require('koneksi.php');
session_start();
error_reporting(0);

$userName = $_SESSION['name'];

?>

<?php  
require('koneksi.php');
session_start();

$userName = $_SESSION['name'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cluster - Bernady Land Slawu</title>
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
        <a href="index.html"><img src="img/logo-bernady.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
       <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Layanan</a></li>
        <li><a class="active" href="portfolio.php">Cluster</a></li>
        <li><a href="team.php">Team</a></li>
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

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><blockquote>Cluster Perumahan</blockquote></h2>
          <style>
            blockquote {
              font-family: 'Times New Roman', Times, serif;
              font-size: larger;
            }
        </style>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Cluster Perumahan</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-boulevard">Boulevard Magnolia</li>
              <li data-filter=".filter-camelia">Camelia</li>
              <li data-filter=".filter-gardenia">Edge Gardenia</li>
              <li data-filter=".filter-new-edge">New Edge Gardenia</li>
              <li data-filter=".filter-pinewood">Pinewood</li>
              <li data-filter=".filter-plumeria">Plumeria</li>
              <li data-filter=".filter-qbix">QBIX</li>
              <li data-filter=".filter-ruko">Ruko</li>
              <li data-filter=".filter-soho">SOHO</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-boulevard">
            <div class="portfolio-item">
              <img src="img/boluevard magnolia.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Boulevard Magnolia</h3>
                <div>
                  <a href="img/gambar9.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-search"></i></a>
                  <a href="portfolio-details-magnolia.html" title="Cluster Details" ><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-camelia">
            <div class="portfolio-item">
              <img src="img/camelia.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Camelia</h3>
                <div>
                  <a href="img/gambar6.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-camelia.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-camelia">
            <div class="portfolio-item">
              <img src="img/Camelia 2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Camelia</h3>
                <div>
                  <a href="img/gambar17.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-camelia.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-camelia">
            <div class="portfolio-item">
              <img src="img/Camelia 3.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Camelia</h3>
                <div>
                  <a href="img/gambar18.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-camelia.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-gardenia">
            <div class="portfolio-item">
              <img src="img/edge gardenia.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Edge Gardenia</h3>
                <div>
                  <a href="img/gambar4.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-gardenia.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-new-edge">
            <div class="portfolio-item">
              <img src="img/new edge gardenia.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>New Edge Gardenia</h3>
                <div>
                  <a href="img/gambar4.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-new-edge.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-pinewood">
            <div class="portfolio-item">
              <img src="img/pinewood.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Pinewood</h3>
                <div>
                  <a href="img/gambar7.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-pinewood.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-pinewood">
            <div class="portfolio-item">
              <img src="img/pinewood1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Pinewood</h3>
                <div>
                  <a href="img/pinewood3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-pinewood.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-pinewood">
            <div class="portfolio-item">
              <img src="img/pinewood2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Pinewood</h3>
                <div>
                  <a href="img/pinewood4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-pinewood.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-pinewood">
            <div class="portfolio-item">
              <img src="img/Pinewood 5.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Pinewood</h3>
                <div>
                  <a href="img/gambar10.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-pinewood.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-pinewood">
            <div class="portfolio-item">
              <img src="img/Pinewood 6.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Pinewood</h3>
                <div>
                  <a href="img/gambar13.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-pinewood.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-pinewood">
            <div class="portfolio-item">
              <img src="img/Pinewood 7.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Pinewood</h3>
                <div>
                  <a href="img/gambar11.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-pinewood.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-pinewood">
            <div class="portfolio-item">
              <img src="img/Pinewood 8.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Pinewood</h3>
                <div>
                  <a href="img/gambar12.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-pinewood.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-plumeria">
            <div class="portfolio-item">
              <img src="img/plumeria.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Plumeria</h3>
                <div>
                  <a href="img/gambar5.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-plumeria.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-plumeria">
            <div class="portfolio-item">
              <img src="img/Plumeria 2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Plumeria</h3>
                <div>
                  <a href="img/gambar14.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-plumeria.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-plumeria">
            <div class="portfolio-item">
              <img src="img/Plumeria 3.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Plumeria</h3>
                <div>
                  <a href="img/gambar15.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-plumeria.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-plumeria">
            <div class="portfolio-item">
              <img src="img/Plumeria 4.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Plumeria</h3>
                <div>
                  <a href="img/gambar16.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-plumeria.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-qbix">
            <div class="portfolio-item">
              <img src="img/qbix.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>QBIX</h3>
                <div>
                  <a href="img/gambar1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-qbix.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-qbix">
            <div class="portfolio-item">
              <img src="img/qbix1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>QBIX</h3>
                <div>
                  <a href="img/qbix3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-qbix.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-qbix">
            <div class="portfolio-item">
              <img src="img/qbix2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>QBIX</h3>
                <div>
                  <a href="img/qbix4.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-qbix.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-ruko">
            <div class="portfolio-item">
              <img src="img/soho.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Ruko</h3>
                <div>
                  <a href="img/gambar2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-ruko.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-soho">
            <div class="portfolio-item">
              <img src="img/ruko.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Soho</h3>
                <div>
                  <a href="img/gambar8.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-search"></i></a>
                  <a href="portofolio-details-soho.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

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

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Properti Baru</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="pemesanan.html">Pesan Rumah</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="portfolio.html">Cluster Perumahan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Fasilitas</a></li>
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
            <h3>About bernadyLandSlawu</h3>
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