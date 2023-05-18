<?php
require 'koneksi.php';
session_start();
error_reporting(0);
$userName = $_SESSION['name'];
$id_pemesanan_rumah = $_SESSION['id_pemesanan_rumah'];
$SesLvl = $_SESSION['level'];

// if (isset($_POST['simpan'])){
//     // $id_cluster = $_POST['id_cluster'];
//     $foto = $_FILES['foto_cluster']['name'];
//     $temp = $_FILES['foto_cluster']['tmp_name'];
//     $nama_cluster = $_POST['nama_cluster'];
//     $blok = $_POST['blok'];
//     $jumlah_unit = $_POST['jumlah_unit'];
//     $harga = $_POST['harga'];
//     $hargaDp = $_POST['hargaDp'];
//     $image_files = $nama_cluster. '.jpg';

// $query = mysqli_query($koneksi, "INSERT INTO cluster (nama_cluster,blok,jumlah_unit,harga,harga_dp,foto_cluster) VALUES ('$nama_cluster','$blok', '$jumlah_unit','$harga','$hargaDp','$foto')");
// // $data = mysqli_fetch_array($query_mysql);
// copy($temp, "img/images_cluster/" . $image_files);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Profile - Bernady Land Slawu</title>
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

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
  <link href="vendor/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">
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
        <a href="index-admin.php"><img src="img/logo-bernady.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="index-admin.php">Beranda</a></li>
          <li><a href="about-admin.php">Tentang</a></li>
          <li><a href="services-admin.php">Layanan</a></li>
          <li><a href="portfolio-admin.php">Cluster</a></li>
          <li><a href="team-admin.php">Tim</a></li>
          <li><a class="active" href="contact-admin.php">Kontak</a></li>
          <?php

          if($userName = $_SESSION['name']){
            
            echo "

            <div class='dropdown' style='margin-right:50px;'><a href='#'> $userName </a>
            <ul>
            <li> <a href='profile-user.php'>Profil</a></li>
            <li> <a href='list-pemesanan-admin.php'>Pemesanan Rumah</a></li>
            <li> <a href='pembayaran-admin.php'>Pembayaran</a></li>
            <li data-bs-toggle='modal' data-bs-target='#modalLogout'> <a href='javascript:void(0)'>Logout</a></li>
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

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><blockquote>Data Cluster</blockquote></h2>
          <style>
            blockquote {
              font-family: 'Times New Roman', Times, serif;
              font-size: larger;
            }
        </style>
          <ol>
            <li><a href="index-admin.php">Home</a></li>
            <li>Profil</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div  class="container">
      <table id="example" class="table table-striped" style="width:100%">
      <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Cluster</th>
                    <th>Blok</th>
                    <th>Jumlah Unit</th>
                    <th>Harga</th>
                    <th>Harga DP</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 include 'koneksi.php';
                 $no = 1;
                 $cluster = mysqli_query($koneksi, "SELECT * FROM cluster");
                 while ($row = mysqli_fetch_array($cluster)) {
                    $id_cluster = $row['id_cluster'];
                    $foto_cluster = $row['foto_cluster'];
                    $nama_cluster = $row['nama_cluster'];
                    $blok = $row['blok'];
                    $jumlah_unit = $row['jumlah_unit'];
                    $harga = $row['harga'];
                    $hargaDp = $row['harga_dp'];
                ?>
                 <tr>
                 <td><?php echo $no++ ?></td>       
                        <td><?php echo $nama_cluster ?></td>
                        <td><?php echo $blok ?></td>
                        <td><?php echo $jumlah_unit ?></td>
                        <td><?php echo $harga ?></td>
                        <td><?php echo $hargaDp?></td>
                        <td><img src="img/images_cluster/<?php echo $row['foto_cluster']; ?>"  height="60px"></td>
                        <td>
                        <a href="tambah-spesifikasi.php" class="btn btn-info btn-circle <?php echo $dis; ?>"><i class="fa fa-plus"></i></a >
                        <a href="form-edit-cluster.php?id=<?php echo $row['id_cluster']; ?>" class="btn btn-warning btn-circle <?php echo $dis; ?>"><i class="fa fa-pen"></i></a >
                        
                        <a href="javascript:del(<?php echo $row['id_cluster'];?>)">Hapus</a></td>
                        </td>
                 </tr>
                 <?php 
                }
                ?> 
            </tbody>
          </table>
    </div>
      <script>
        $(document).ready(function() {
            $('#example').DataTable({
                scrollX: true,
            });
        });
    </script>
    <!-- </section>End Contact Section -->

    <!-- ======= Map Section ======= -->
    <!-- <section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63192.192514702285!2d113.6420152334!3d-8.15105391793801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6945cc03261bd%3A0xf7d0c1839cf1e71!2sCamelia%20Cluster%20Bernady%20Land%20Slawu!5e0!3m2!1sid!2sid!4v1669767817028!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>End Map Section -->

  <!-- </main>End #main -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="index-admin.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about-admin.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services-admin.php">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="services-admin.php">Properti Baru</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="pemesanan-admin.php">Pesan Rumah</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="portfolio-admin.php">Cluster Perumahan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services-admin.php">Fasilitas</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Jl. Koptu Berlian, Lingkungan Krajan Timur, Tegalgede, Kec. Sumbersari, Kabupaten Jember, Jawa Timur <br>
              68126<br>
              Indonesia <br><br>
              <strong>Phone:</strong><a href="https://wa.me/+6281231230899">+62 812 3123 0899</a><br>
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

  <!-- <script>

//Hapus Data
      function confirmModal(link) {
        let ok = confirm("Apakah anda yakin ingin menghapus data ini?")

        if(ok){
          window.location = link
        }
      }
  </script> -->

  <script language="JavaScript" type="text/javascript">
function del(id){
if (confirm("yakin akan menghapus data ini?")){
window.location.href = 'hapus_cluster.php?id=' + $idcluster;
}}
</script>

</body>

</html>



