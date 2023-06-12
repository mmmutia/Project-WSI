<?php
require ('koneksi.php');
session_start();
error_reporting(0);
$userName = $_SESSION['name'];
$id_pemesanan_rumah = $_SESSION['id_pemesanan_rumah'];
$userLvl = $_SESSION['level'];

// if (isset($_GET['id_pemesanan_rumah'])||isset($_GET['id_detail_pemesanan'])) {
//   $id_detail_pemesanan = $_GET['id_detail_rumah'];
//   $id_pemesanan_rumah = $_GET['id_pemesanan_rumah'];
// } else {
//   die("Error. No ID Selected!");
// }

// $id_cluster = $_SESSION['id_cluster'];
$userName = $_SESSION['name'];
$query_mysql = mysqli_query($koneksi, "select * from user_detail where user_fullname = '$userName'");
$data = mysqli_fetch_array($query_mysql);
$id_user = $data['id_user'];
// $query = mysqli_fetch_array($query);

// $query_mysql = mysqli_query($koneksi,"select * from user_detail where user_fullname = '$userName'");
// $data = mysqli_fetch_array($query_mysql);
// $query = $data['id_pemesanan_rumah'];
// $query_mysql2 = mysqli_query($koneksi,"select * from pemesanan_rumah where id_pemesanan_rumah = '$query'");
// // $item = mysqli_fetch_array($query_mysql2);

if (isset($_POST['hapus'])) {

  $hapus = mysqli_query($koneksi, "DELETE FROM pemesanan_rumah
      WHERE id_pemesanan_rumah = '$id_pemesanan_rumah[id_pemesanan_rumah]'
  ");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Data Pemesanan - Bernady Land Slawu</title>
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
          <h2><blockquote>Data Pemesanan Rumah</blockquote></h2>
          <style>
            blockquote {
              font-family: 'Times New Roman', Times, serif;
              font-size: larger;
            }
        </style>
          <ol>
            <li><a href="index-admin.php">Beranda</a></li>
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
                <th>Nama Pemesan</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>ID Cluster</th>
                <th>Tanggal Pemesanan</th>
                <th>Jenis Pembayaran</th>
                <th>Foto KTP</th>
                <th>Jumlah Cicilan DP</th>
                <th>Jumlah Cicilan Inhouse</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $query2 = "SELECT * FROM pemesanan_rumah  WHERE pemesanan_rumah.id_user = '$id_user'";
        $result = mysqli_query($koneksi,$query2);
        $no=1;   
        while($row = mysqli_fetch_array($result)){
        ?>
        <tr class="text-center">
              <td><?php echo $no++?></td>
              <td><?php echo $row['nama_pemesan'];?></td>
              <td><?php echo $row['alamat'];?></td>
              <td><?php echo $row['no_telp_pemesan'];?></td>
              <td><?php echo $row['id_cluster'];?></td>
              <td><?php echo $row['tgl_pemesanan'];?></td>
              <td><?php echo $row['jenis_pembayaran'];?></td>
              <td><img src="img/filepemesanan/<?php echo $row['fotocopy_ktp']; ?>"  height="80px"></td>
              <td><?php echo $row['jml_cicilan_dp'];?></td>
              <td><?php echo $row['jml_cicilan_inhouse'];?></td>
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
              <li><i class="bx bx-chevron-right"></i> <a href="index-admin.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about-admin.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services-admin.php">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
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

  <script>

//Hapus Data
      function confirmModal(link) {
        let ok = confirm("Apakah anda yakin ingin menghapus data ini?")

        if(ok){
          window.location = link
        }
      }
  </script> 
  

</body>

</html>