<?php
require ('koneksi.php');
session_start();
error_reporting(0);
$userName = $_SESSION['name'];
$id_pemesanan_rumah = $_SESSION['id_pemesanan_rumah'];
$id_pembayaran_dp = $_SESSION['id_pembayaran_dp'];
$SesLvl = $_SESSION['level'];

$query_mysql = mysqli_query($koneksi,"select * from pembayaran_dp where id_pembayaran_dp = '$id_pembayaran_dp'");
$data = mysqli_fetch_array($query_mysql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pembayaran - Bernady Land Slawu</title>
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


    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><blockquote>Data Pembayaran </blockquote></h2>
          <style>
            blockquote {
              font-family: 'Times New Roman', Times, serif;
              font-size: larger;
            }
        </style>
          <ol>
            <li><a href="index-admin.php">Beranda</a></li>
            <li>Pembayaran</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Data Pembayaran Section ======= -->
    <section class="pembayaran">
        <div class="container">
        <div class="row">
        <div class="col-sm-6">
        <div class="card text-center">
          <div class="card-header">
            Pembayaran
          </div>
          <div class="card-body">
            <h5 class="card-title">Pembayaran DP Rumah</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <button data-modal-target="#modal-add" class="btn btn-outline-secondary" name="add-pembayaran-dp">Bayar Sekarang</button>
            <a href="riwayat-pembayaran-dp.php" class="btn btn-outline-secondary" name="add-pembayaran-dp">Riwayat Pembayaran</a>
          </div>
          <div class="card-footer text-muted">
            2 days ago
          </div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="card text-center">
          <div class="card-header">
            Pembayaran
          </div>
          <div class="card-body">
            <h5 class="card-title">Pembayaran InHouse</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <button data-modal-target="#modal-add-inhouse" class="btn btn-outline-secondary" name="add-pembayaran-inhouse">Bayar Sekarang</button>
            <a href="riwayat-pembayaran-inhouse.php" class="btn btn-outline-secondary" name="add-pembayaran-inhouse">Riwayat Pembayaran</a>
          </div>
          <div class="card-footer text-muted">
            2 days ago
          </div>
        </div>
        
      </div>
   
    </section>

    <!-- Pop up Add -->
    <div class="modal-add" id="modal-add">
        <div class="modal-header-add">
          <h2 class="add">Upload Pembayaran DP</h2>
          <!-- <button data-close-add class="close-btn-add">&times;</button> -->

          <div class="modal-body-add">
            <form action="pembayaran-customer.php" method="post" enctype="multipart/form-data">


            <div class="form-group">
                <label for="exampleFormControlSelect1">Id Pemesanan</label>


                <select class="form-control" name="id_pemesanan_rumah" required>
                <option value='#'> Pilih Id</option>
                  <?php
                 
                  $query = mysqli_query($koneksi, "select * from pemesanan_rumah");
                  while ($row = mysqli_fetch_array($query)) {
                    echo "<option value=$row[id_pemesanan_rumah]> $row[id_pemesanan_rumah] - $row[nama_pemesan]</option>";
                  }
                  ?>


                </select>

              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">Tanggal Pembayaran DP</label>


                <input type="date" class="form-control" name="tgl_pembayaran_dp" required>
                
                </select>

              </div>

             
              <div class="form-group">
                <label class="custom-file-label" for="customFileLang">Upload Bukti Pembayaran DP</label>
                <input type="file" class="form-control" id="bukti_pembayaran_dp" name="bukti_pembayaran_dp" id="foto" required>

              </div>


              <div class="align-middle text-center"><br>
                <button class="btn btn-success btn-sm ms-auto" name="add-pembayaran-dp">Add</button>
                <button class="btn btn-danger btn-sm ms-auto" data-close-add>Close</button>
              </div>


            </form>
          </div>
        </div>
      </div>
      <style>
        .modal-add {
          position: fixed;
          left: 0;
          top: 0;
          background: rgb(0, 0, 0, 0.6);
          height: 100%;
          width: 100%;
          display: flex;
          align-items: center;
          justify-content: center;
          opacity: 0;
          pointer-events: none;

          z-index: 10000;
        }

        .modal-body-add {
          padding: 10px;
          bottom: 10px;
        }

        .modal-header-add {
          background: white;
          width: 560px;
          max-width: 90%;
          padding: 20px;
          border-radius: 4px;
          position: relative;

        }

        .btn-open {
          background: black;
          padding: 10px 40px;
          color: white;
          border-radius: 5px;
          font-size: 15px;
          cursor: pointer;
        }

        p.add {
          line-height: 1.6;
          margin-bottom: 20px;
        }

        h2.add {
          text-align: center;

        }

        .modal-header-add button.close-btn-add {
          position: absolute;
          right: 10px;
          top: 10px;
          font-size: 32px;
          background: none;
          outline: none;
          border: none;
          cursor: pointer;
        }

        .modal-header-add button.close-btn-add:hover {
          color: #6b46c1;
        }

        .active-add {
          opacity: 1;
          pointer-events: auto;
        }
      </style>
      <script>
        const openModalAdd = document.querySelectorAll("[data-modal-target]");
        const closeModalAdd = document.querySelectorAll(
          "[data-close-add]"
        );

        openModalAdd.forEach((button) => {
          button.addEventListener("click", () => {
            const modal = document.querySelector(button.dataset.modalTarget);
            openModal(modal);
          });
        });

        closeModalAdd.forEach((button) => {
          button.addEventListener("click", () => {
            const modal = button.closest(".modal-add");
            closeModal(modal);
          });
        });

        function openModal(modal) {
          if (modal == null) return;
          modal.classList.add("active-add");
        }

        function closeModal(modal) {
          if (modal == null) return;
          modal.classList.remove("active-add");
        }
      </script>
      <!-- end Pop up Add -->

      <!-- Pop up Add -->
    <div class="modal-add" id="modal-add">
        <div class="modal-header-add">
          <h2 class="add">Upload Pembayaran DP</h2>
          <!-- <button data-close-add class="close-btn-add">&times;</button> -->

          <div class="modal-body-add">
            <form action="pembayaran-customer.php" method="post" enctype="multipart/form-data">


            <div class="form-group">
                <label for="exampleFormControlSelect1">Id Pemesanan</label>


                <select class="form-control" name="id_pemesanan_rumah" required>
                <option value='#'> Pilih Id</option>
                  <?php
                 
                  $query = mysqli_query($koneksi, "select * from pemesanan_rumah");
                  while ($row = mysqli_fetch_array($query)) {
                    echo "<option value=$row[id_pemesanan_rumah]> $row[id_pemesanan_rumah] - $row[nama_pemesan]</option>";
                  }
                  ?>


                </select>

              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">Tanggal Pembayaran DP</label>


                <input type="date" class="form-control" name="tgl_pembayaran_dp" required>
                
                </select>

              </div>

             
              <div class="form-group">
                <label class="custom-file-label" for="customFileLang">Upload Bukti Pembayaran DP</label>
                <input type="file" class="form-control" id="bukti_pembayaran_dp" name="bukti_pembayaran_dp" id="foto" required>

              </div>


              <div class="align-middle text-center"><br>
                <button class="btn btn-success btn-sm ms-auto" name="add-pembayaran-dp">Add</button>
                <button class="btn btn-danger btn-sm ms-auto" data-close-add>Close</button>
              </div>


            </form>
          </div>
        </div>
      </div>
      <style>
        .modal-add {
          position: fixed;
          left: 0;
          top: 0;
          background: rgb(0, 0, 0, 0.6);
          height: 100%;
          width: 100%;
          display: flex;
          align-items: center;
          justify-content: center;
          opacity: 0;
          pointer-events: none;

          z-index: 10000;
        }

        .modal-body-add {
          padding: 10px;
          bottom: 10px;
        }

        .modal-header-add {
          background: white;
          width: 560px;
          max-width: 90%;
          padding: 20px;
          border-radius: 4px;
          position: relative;

        }

        .btn-open {
          background: black;
          padding: 10px 40px;
          color: white;
          border-radius: 5px;
          font-size: 15px;
          cursor: pointer;
        }

        p.add {
          line-height: 1.6;
          margin-bottom: 20px;
        }

        h2.add {
          text-align: center;

        }

        .modal-header-add button.close-btn-add {
          position: absolute;
          right: 10px;
          top: 10px;
          font-size: 32px;
          background: none;
          outline: none;
          border: none;
          cursor: pointer;
        }

        .modal-header-add button.close-btn-add:hover {
          color: #6b46c1;
        }

        .active-add {
          opacity: 1;
          pointer-events: auto;
        }
      </style>
      <script>
        const openModalAdd = document.querySelectorAll("[data-modal-target]");
        const closeModalAdd = document.querySelectorAll(
          "[data-close-add]"
        );

        openModalAdd.forEach((button) => {
          button.addEventListener("click", () => {
            const modal = document.querySelector(button.dataset.modalTarget);
            openModal(modal);
          });
        });

        closeModalAdd.forEach((button) => {
          button.addEventListener("click", () => {
            const modal = button.closest(".modal-add");
            closeModal(modal);
          });
        });

        function openModal(modal) {
          if (modal == null) return;
          modal.classList.add("active-add");
        }

        function closeModal(modal) {
          if (modal == null) return;
          modal.classList.remove("active-add");
        }
      </script>
      <!-- end Pop up Add -->

    <!-- End Data Pembayaran Section -->

      <!-- Pop up Add Inhouse -->
    <div class="modal-add-inhouse" id="modal-add-inhouse">
        <div class="modal-header-add">
          <h2 class="add">Upload Pembayaran Inhouse</h2>
          <!-- <button data-close-add class="close-btn-add">&times;</button> -->

          <div class="modal-body-add">
            <form action="pembayaran-customer.php" method="post" enctype="multipart/form-data">


            <div class="form-group">
                <label for="exampleFormControlSelect1">Id Pemesanan</label>


                <select class="form-control" name="id_pemesanan_rumah" required>
                <option value='#'> Pilih Id</option>
                  <?php
                 
                  $query = mysqli_query($koneksi, "select * from pemesanan_rumah");
                  while ($row = mysqli_fetch_array($query)) {
                    echo "<option value=$row[id_pemesanan_rumah]> $row[id_pemesanan_rumah] - $row[nama_pemesan]</option>";
                  }
                  ?>


                </select>

              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">Tanggal Pembayaran Inhouse</label>


                <input type="date" class="form-control" name="tgl_pembayaran_inhouse" required>
                
                </select>

              </div>

             
              <div class="form-group">
                <label class="custom-file-label" for="customFileLang">Upload Bukti Pembayaran Inhouse</label>
                <input type="file" class="form-control" id="bukti_pembayaran_inhouse" name="bukti_pembayaran_inhouse" id="foto" required>

              </div>


              <div class="align-middle text-center"><br>
                <button class="btn btn-success btn-sm ms-auto" name="add-pembayaran-inhouse">Add</button>
                <button class="btn btn-danger btn-sm ms-auto" data-close-add>Close</button>
              </div>


            </form>
          </div>
        </div>
      </div>
      <style>
        .modal-add-inhouse {
          position: fixed;
          left: 0;
          top: 0;
          background: rgb(0, 0, 0, 0.6);
          height: 100%;
          width: 100%;
          display: flex;
          align-items: center;
          justify-content: center;
          opacity: 0;
          pointer-events: none;

          z-index: 10000;
        }

        .modal-body-add {
          padding: 10px;
          bottom: 10px;
        }

        .modal-header-add {
          background: white;
          width: 560px;
          max-width: 90%;
          padding: 20px;
          border-radius: 4px;
          position: relative;

        }

        .btn-open {
          background: black;
          padding: 10px 40px;
          color: white;
          border-radius: 5px;
          font-size: 15px;
          cursor: pointer;
        }

        p.add {
          line-height: 1.6;
          margin-bottom: 20px;
        }

        h2.add {
          text-align: center;

        }

        .modal-header-add button.close-btn-add {
          position: absolute;
          right: 10px;
          top: 10px;
          font-size: 32px;
          background: none;
          outline: none;
          border: none;
          cursor: pointer;
        }

        .modal-header-add button.close-btn-add:hover {
          color: #6b46c1;
        }

        .active-add {
          opacity: 1;
          pointer-events: auto;
        }
      </style>
      <script>
        const openModalAdd = document.querySelectorAll("[data-modal-target]");
        const closeModalAdd = document.querySelectorAll(
          "[data-close-add]"
        );

        openModalAdd.forEach((button) => {
          button.addEventListener("click", () => {
            const modal = document.querySelector(button.dataset.modalTarget);
            openModal(modal);
          });
        });

        closeModalAdd.forEach((button) => {
          button.addEventListener("click", () => {
            const modal = button.closest(".modal-add-inhouse");
            closeModal(modal);
          });
        });

        function openModal(modal) {
          if (modal == null) return;
          modal.classList.add("active-add");
        }

        function closeModal(modal) {
          if (modal == null) return;
          modal.classList.remove("active-add");
        }
      </script>
      <!-- end Pop up Add -->
  


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
              <li><i class="bx bx-chevron-right"></i> <a href="index-admin.php">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about-admin.php">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services-admin.php">Layanan</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Layanan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="services-admin.php">Properti Baru</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="pemesanan-admin.php">Pesan Rumah</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="portfolio-admin.php">Cluster Perumahan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services-admin.php">Fasilitas</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Kontak</h4>
            <p>
              Jl. Koptu Berlian, Lingkungan Krajan Timur, Tegalgede, Kec. Sumbersari, Kabupaten Jember, Jawa Timur <br>
              68126<br>
              Indonesia <br><br>
              <strong>Phone:</strong><a href="https://wa.me/+6281231230899">+62 812 3123 0899</a><br>
              <strong>Email:</strong> bernadylandslawu@gmail.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Tentang Bernady Land Slawu</h3>
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
  <!-- <script src="js/jquery-3.6.3.min.js"></script> -->
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

    <?php
    require("koneksi.php");
    session_start();
    error_reporting(0);
    if (isset($_POST['add-pembayaran-dp'])) {
      $idpemesanan = $_POST['id_pemesanan_rumah'];
      $tanggal = $_POST['tgl_pembayaran_dp'];
      
      $fotoadd = $_FILES['bukti_pembayaran_dp']['name'];
      $file_tmp = $_FILES['bukti_pembayaran_dp']['tmp_name'];
      move_uploaded_file($file_tmp, './img/pembayaran_dp/' . $fotoadd);


      $query    = "INSERT INTO `pembayaran_dp` (`id_pembayaran_dp`,`id_pemesanan_rumah`, `tgl_pembayaran_dp`, `bukti_pembayaran_dp`, `status_dp`) VALUES ('','$idpemesanan', '$tanggal', '$fotoadd','')";
      $result   = mysqli_query($koneksi, $query);

      if ($result) {
        echo "<script>
        Swal.fire({title: 'Data Berhasil Disimpan',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {if (result.value)
          {window.location = '';}
        })</script>";
      } else {

        echo "<script>
          Swal.fire({title: 'Data Gagal Disimpan',text: '',icon: 'error',confirmButtonText: 'OK'
          }).then((result) => {if (result.value)
            {window.location = '';}
          })</script>";
      }
    }
    require('./koneksi.php');
    error_reporting(0);
    $id = $_GET['id'];
    $idpemesananedit = $_POST['id_pemesanan_edit'];
    $tanggaledit = $_POST['tanggal_edit'];

    $fotoedit = $_FILES['fotoedit']['name'];
    $file_tmp = $_FILES['fotoedit']['tmp_name'];
    move_uploaded_file($file_tmp, './img/pembayaran_dp/' . $fotoedit);


    if (isset($_POST['edit-user'])) {
      if (isset($_POST['edit-user'])) {
        if ($fotoedit == "") {
          $sql = mysqli_query($koneksi, "UPDATE `pembayaran_dp` SET id_pemesanan_rumah='$idpemesananedit', tgl_pembayaran_dp='$tanggaledit',status_dp='$statuspemesananedit' WHERE id='$id'");
          // header('location:users.view.php');
          echo "<script>
                Swal.fire({title: 'Data Berhasil Diubah',text: '',icon: 'success',confirmButtonText: 'OK'
                }).then((result) => {if (result.value)
                    {window.location = 'pembayaran-customer.php';}
                })</script>";
        } else {

          $hapusfoto = "select bukti_pembayaran_dp as bukti_pembayaran_dp from pembayaran_dp where id='$_GET[id]'";
          $result = mysqli_query($koneksi, $hapusfoto);
          $row = mysqli_fetch_array($result, MYSQLI_BOTH);

          $fotoproggresedit = $row['bukti_pembayaran_dp'];
          if (file_exists("./img/pembayaran_dp/$fotoproggresedit")) {
            unlink("./img/pembayaran_dp/$fotoproggresedit");
          }

          $sql = mysqli_query($koneksi, "UPDATE `pembayaran_dp` SET id_pemesanan_rumah='$idpemesananedit', tgl_pembayaran_dp='$tanggaledit', bukti_pembayaran_dp = '$fotoedit' WHERE id='$id'");
          // header('location:users.view.php');
          echo "<script>
                Swal.fire({title: 'Data Berhasil Diubah',text: '',icon: 'success',confirmButtonText: 'OK'
                }).then((result) => {if (result.value)
                    {window.location = 'pembayaran-customer.php';}
                })</script>";
        }
      } else {
        echo "<script>
                Swal.fire({title: 'Data Gagal Disimpan',text: '',icon: 'error',confirmButtonText: 'OK'
                }).then((result) => {if (result.value)
                    {window.location = 'pembayaran-customer.php';}
                })</script>";
      }
    }

    include "koneksi.php";
    error_reporting(0);
    ?>

    <?php
    require("koneksi.php");
    session_start();
    error_reporting(0);
    if (isset($_POST['add-pembayaran-inhouse'])) {
      $idpemesanan = $_POST['id_pemesanan_rumah'];
      $tanggal_inhouse = $_POST['tgl_pembayaran_inhouse']; 
      $foto_inhouse = $_FILES['bukti_pembayaran_inhouse']['name'];
      $file_tmp = $_FILES['bukti_pembayaran_inhouse']['tmp_name'];
      move_uploaded_file($file_tmp, './img/bukti_inhouse/' . $foto_inhouse);


      $query    = "INSERT INTO `pembayaran_inhouse` (`id_pemesanan_rumah`, `tgl_pembayaran_inhouse`, `bukti_pembayaran_inhouse`) VALUES ('$idpemesanan', '$tanggal_inhouse', '$foto_inhouse')";
      $result   = mysqli_query($koneksi, $query);

      if ($result) {
        echo "<script>
        Swal.fire({title: 'Data Berhasil Disimpan',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {if (result.value)
          {window.location = '';}
        })</script>";
      } else {

        echo "<script>
          Swal.fire({title: 'Data Gagal Disimpan',text: '',icon: 'error',confirmButtonText: 'OK'
          }).then((result) => {if (result.value)
            {window.location = '';}
          })</script>";
      }
    }
    require('./koneksi.php');
    error_reporting(0);
    $id = $_GET['id'];
    $idpemesananedit = $_POST['id_pemesanan_edit'];
    $tanggal_edit = $_POST['tanggal_edit'];

    $foto_edit = $_FILES['foto_edit']['name'];
    $file_tmp = $_FILES['foto_edit']['tmp_name'];
    move_uploaded_file($file_tmp, './img/bukti_inhouse/' . $foto_edit);


    if (isset($_POST['edit-user'])) {
      if (isset($_POST['edit-user'])) {
        if ($fotoedit == "") {
          $sql = mysqli_query($koneksi, "UPDATE `pembayaran_inhouse` SET id_pemesanan_rumah='$idpemesananedit', tgl_pembayaran_inhouse='$tanggal_edit' WHERE id='$id'");
          // header('location:users.view.php');
          echo "<script>
                Swal.fire({title: 'Data Berhasil Diubah',text: '',icon: 'success',confirmButtonText: 'OK'
                }).then((result) => {if (result.value)
                    {window.location = 'pembayaran-customer.php';}
                })</script>";
        } else {

          $hapusfoto = "select bukti_pembayaran_inhouse as bukti_pembayaran_inhouse from pembayaran_inhouse where id='$_GET[id]'";
          $result = mysqli_query($koneksi, $hapusfoto);
          $row = mysqli_fetch_array($result, MYSQLI_BOTH);

          $fotoproggresedit = $row['bukti_pembayaran_inhouse'];
          if (file_exists("./img/bukti_inhouse/$fotoproggresedit")) {
            unlink("./img/bukti_inhouse/$fotoproggresedit");
          }

          $sql = mysqli_query($koneksi, "UPDATE `pembayaran_dp` SET id_pemesanan_rumah='$idpemesananedit', tgl_pembayaran_dp='$tanggaledit', bukti_pembayaran_dp = '$fotoedit' WHERE id='$id'");
          // header('location:users.view.php');
          echo "<script>
                Swal.fire({title: 'Data Berhasil Diubah',text: '',icon: 'success',confirmButtonText: 'OK'
                }).then((result) => {if (result.value)
                    {window.location = 'pembayaran-customer.php';}
                })</script>";
        }
      } else {
        echo "<script>
                Swal.fire({title: 'Data Gagal Disimpan',text: '',icon: 'error',confirmButtonText: 'OK'
                }).then((result) => {if (result.value)
                    {window.location = 'pembayaran-customer.php';}
                })</script>";
      }
    }

    include "koneksi.php";
    error_reporting(0);