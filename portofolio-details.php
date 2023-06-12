<?php
require('koneksi.php');
session_start();
error_reporting(0);

if (isset($_GET['id_cluster'])||isset($_GET['id_simpan'])) {
  $id_cluster = $_GET['id_cluster'];
  $id_simpan = $_GET['id_simpan'];
} else {
  die("Error. No ID Selected!");
}

// $id_cluster = $_SESSION['id_cluster'];
$userName = $_SESSION['name'];
$query_mysql = mysqli_query($koneksi, "select * from user_detail where user_fullname = '$userName'");
$data = mysqli_fetch_array($query_mysql);


$query    = mysqli_query($koneksi, "SELECT * FROM spesifikasi_teknis JOIN cluster ON cluster.id_cluster=spesifikasi_teknis.id_cluster WHERE spesifikasi_teknis.id_cluster='$id_cluster'");
$result   = mysqli_fetch_array($query);

if (isset($_POST['simpan'])) {
  $Id_user = $data['id_user'];
  $cek = mysqli_query($koneksi, "select * from simpan_cluster where id_cluster = '$id_cluster' AND id_user = '$Id_user' ");
  if (mysqli_num_rows($cek) == 0) {
    $query = "INSERT INTO simpan_cluster(id_cluster,id_user) VALUES ('$_GET[id_cluster]','$data[id_user]')";
    $result = mysqli_query($koneksi, $query);
  } else {
    header("location:portofolio-details.php?id_cluster=$id_cluster");
    echo '<script type ="text/JavaScript">';
    echo 'alert("Anda Sudah Menyimpan Cluster Ini")';
    echo '</script>';;
  }
}
if (isset($_POST['hapus'])) {
  $Id_user = $data['id_user'];
    $query1 = mysqli_query($koneksi,"DELETE FROM simpan_cluster WHERE id_simpan='$id_simpan'") or die(mysqli_error($koneksi));
    header("location:daftar-cluster-tersimpan.php");
    // $result = mysqli_query($koneksi, $query1); 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cluster Details - Bernady Land Slawu</title>
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

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Cluster Details</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="portfolio.php">Cluster</a></li>
            <li><?php echo $result['nama_cluster'] ?> Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="img/images_cluster/<?php echo $result['foto_cluster']; ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="img/images_cluster/<?php echo $result['foto_cluster']; ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="img/images_cluster/<?php echo $result['foto_cluster']; ?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>


          <div class="col-lg-4">
            <form action="portofolio-details.php?id_cluster=<?= $_GET['id_cluster']?>&id_simpan=<?= $_GET['id_simpan'] ?>" method="post">
              <div class="portfolio-info">
                <h3><?php echo $result['nama_cluster'] ?></h3>
                <ul>
                  <li><strong>Pondasi</strong>: <?php echo $result['pondasi'] ?></li>
                  <li><strong>Dinding</strong>: <?php echo $result['dinding'] ?></li>
                  <li><strong>Rangka Atap</strong>: <?php echo $result['rangka_atap'] ?></li>
                  <li><strong>Kusen</strong>: <?php echo $result['kusen'] ?></li>
                  <li><strong>Plafond</strong>: <?php echo $result['plafond'] ?></li>
                  <li><strong>Air</strong>: <?php echo $result['air'] ?></li>
                  <li><strong>Listrik </strong>: <?php echo $result['listrik'] ?></li>
                  <li><strong>Jumlah Kamar</strong>: <?php echo $result['jumlah_kamar'] ?></li>
                  <li><strong>Luas Tanah</strong>: <?php echo $result['luas_tanah'] ?></li>
                  <li><strong>Jenis Cluster</strong>: <?php echo $result['jenis_cluster'] ?></li>
                  <div class="portfolio-description">
                <h2>Harga : <?php echo $result['harga'] ?></h2>
              </div>
                  <a href="pemesanan.php"><button type="button" class="btn btn-secondary">Pesan Rumah Ini</button></a>
                  <button type="submit" name="simpan" class="btn btn-dark">Simpan</button>
                </ul>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Layanan</a></li>
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