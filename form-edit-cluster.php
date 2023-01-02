<?php
require ('koneksi.php');
session_start();
error_reporting(0);
$userName = $_SESSION['name'];
$query_mysql = mysqli_query($koneksi,"select * from user_detail where user_fullname = '$userName'");
$data = mysqli_fetch_array($query_mysql);
if( isset($_POST['update']) ){
    // $Id_user = $_POST['txt_id_user'];
    // $foto = $_FILES['foto_cluster']['name'];
    // $temp = $_FILES['foto_cluster']['tmp_name'];
    $clusterId = $_POST['txt_id'];
    $nama_cluster = $_POST['txt_namacluster'];
    $blok = $_POST['txt_blok'];
    $jumlah_unit = $_POST['jumlah_unit'];
    $harga = $_POST['harga'];
    $hargaDp = $_POST['harga_dp'];
    $fotolama = $row['foto_clusterlama'];
    // $filter = $_POST['txt_filter'];
    $target_dir = "img/images_cluster/";
    $target_file = $target_dir . basename($_FILES["txt_fotocluster"]["name"]);
    $uploadcluster = $_FILES['txt_fotocluster']['name'];
    $filecluster = $_FILES['temp_name'];
    $image_files = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    //cek jika ada foto baru
    if($uploadcluster){
      //kalau ada gambar
      //hapus gambar lama
      unlink('img/images_cluster/'.$fotolama);
      

    // Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["txt_fotocluster"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }


    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["txt_fotocluster"]["tmp_name"], $target_file)) {
            
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    
    //membuat query
    $query = "UPDATE cluster SET nama_cluster='$nama_cluster', blok='$blok',jumlah_unit='$jumlah_unit',harga='$harga', harga_dp='$hargaDp',foto_cluster='$uploadcluster' WHERE id_cluster='$clusterId'";
    }else{
         $query = "UPDATE cluster SET nama_cluster='$nama_cluster', blok='$blok',jumlah_unit='$jumlah_unit',harga='$harga', harga_dp='$hargaDp' WHERE id_cluster='$clusterId'";
    }
	echo $query;
        $result = mysqli_query($koneksi, $query);
        // header('Location: form-edit-cluster.php');
    
    if($result){
        echo "<script>alert('Data Telah Berhasil Di Update');window.location='cluster.php'</script>";
    }
   
}
//   require('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
//   if(isset($_POST['update'])){
//     $clusterId   = $_POST['txt_id'];
//     $clusterNama   = $_POST['txt_nama'];
//     $clusterBlok   = $_POST['txt_blok'];
//     $harga = $_POST['txt_harga'];
//     $hargadp = $_POST['txt_hargadp'];
//     $clusterFoto = $_POST['txt_foto'];
    
    
//     $query = "UPDATE cluster SET nama_cluster='$clusterNama', blok='$clusterBlok',harga='$harga , harga_dp='$hargadp,foto_cluster=$clusterFoto'' WHERE id_cluster='$clusterId'";
//         echo $query;
//         $result = mysqli_query($koneksi, $query);
//         header('Location: form-edit-cluster.php');
// }
$clusterId = $_GET['id'];
$query = "SELECT * FROM cluster WHERE id_cluster='$clusterId'";
$result = mysqli_query($koneksi, $query);
//$nomor = 1;
while ($row =mysqli_fetch_array($result)){
  $clusterId    = $row['id_cluster'];
  $nama_cluster = $row['nama_cluster'];
  $blok = $row['blok'];
  $jumlah_unit = $row['jumlah_unit'];
  $harga = $row['harga'];
  $hargaDp= $row['harga_dp'];
  $uploadcluster= $row['foto_cluster'];
  
  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tambah Cluster - Bernady Land Slawu</title>
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

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
  <link href="https://cdn.datatables.net/select/1.5.0/css/select.bootstrap5.min.css">

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
          <li><a class="" href="index-admin.php">Home</a></li>
          <li><a href="about-admin.php">About</a></li>
          <li><a href="services-admin.php">Layanan</a></li>
          <li><a href="portfolio-admin.php">Cluster</a></li>
          <li><a href="team-admin.php">Team</a></li>
          <li><a class="active" href="contact-admin.php">Contact Us</a></li>
          <?php

          if($userName = $_SESSION['name']){
            
            echo "
            <div class='dropdown' style='margin-right:50px;'><a href='#'> $userName </a>
            <ul>
              <li> <a href='profile-user.php'>Profil</a></li>
                <li> <a href='list-pemesanan-admin.php'>Pemesanan Rumah</a></li>
                <li> <a href='pembayaran-user.php'>Pembayaran</a></li>
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

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class='d-flex justify-content-between align-items-center'>
          <h2><blockquote>Tambah Cluster</blockquote></h2>
          <style>
            blockquote {
              font-family: 'Times New Roman', Times, serif;
              font-size: larger;
            }
        </style>
          <ol>
            <li><a href="index-admin.php">Home</a></li>
            <li><a href="portfolio-admin.php">Cluster Perumahan</a></li>
			<li><a href="cluster.php">Cluster Perumahan</a></li>
            <li>Update Cluster Perumahan</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Update Cluster Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 m-auto">
            <form class="php-email-form" action="form-edit-cluster.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <h1 class="text-center"><span>Update Cluster</span></h1>
                <div>
          <label>ID Cluster</label>
          <input type="hidden" name="txt_id" value="<?php echo $clusterId; ?>"/>
        </div>
                <div class="row-md-6 form-group mb-3">
				<label>Nama Cluster</label>
                  <input class="form-control" type="text" name="txt_namacluster" value="<?php echo $nama_cluster; ?>" autofocus=""/>
                </div>
                <div class="row-md-6 form-group mb-3">
				<label>Blok</label>
         <input class="form-control" type="text" name="txt_blok" value="<?php echo $blok; ?>" />
                </div>
                <div class="row-md-6 form-group mb-3">
                  <label>Unit</label>
         <input class="form-control" type="text" name="jumlah_unit" value="<?php echo $jumlah_unit; ?>" />
                </div>
                <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                  <label>Harga</label>
         <input class="form-control" type="text" name="harga" value="<?php echo $harga; ?>"/>
                </div>
                <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                  <label>Harga DP</label>
         <input class="form-control" type="text" name="harga_dp" value="<?php echo $hargaDp; ?>" />
                </div>
                </div>
                <div class="row-md-6 form-group mt-3 mt-md-0 mb-3"> 
                  <label>Foto Cluster</label>
		  <div class = "image-wrapper">
	  <img src="img/images_cluster/<?php echo $row['foto_cluster']?>">
	  </div>
         <input type="file" name="txt_fotocluster" value="" />
	 <input type="hidden" name="txt_fotoclusterlama" value="<?php echo $row['foto_cluster']; ?>" />
                </div>
                <div class="group">
                        <input type="submit" name="update" class="btn btn-info btn-md" value="Update">
                    </div>
                <!-- <div class="row-md-6 form-group mt-3 mt-md-0 mb-3"> 
                <center><button type="submit" class="btn btn-outline-info" name="Update">Update</button></center>
                </div> -->
              </div>
           
              <!-- <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required disabled>
              </div> -->
              <!-- <div class="text-center"><button type="submit">Send Message</button></div> -->
            </form>
          </div>
         

      </div>
    </section><!-- End Contact Section -->


    <!-- ======= Map Section ======= -->
    <!-- <section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63192.192514702285!2d113.6420152334!3d-8.15105391793801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6945cc03261bd%3A0xf7d0c1839cf1e71!2sCamelia%20Cluster%20Bernady%20Land%20Slawu!5e0!3m2!1sid!2sid!4v1669767817028!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>End Map Section -->

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
  

<!-- <form class="user" method="POST" action="form-edit-cluster.php" enctype="multipart/form-data" >
      <section class="base">
      <div>
          <label>ID Cluster</label>
          <input type="hidden" name="txt_id" value="" autofocus=""/>
        </div>
        <div>
          <label>Nama Cluster</label>
          <input type="text" name="txt_namacluster" value="" autofocus=""/>
        </div>
        <div>
          <label>Blok</label>
         <input type="text" name="txt_blok" value="" />
        </div>
        <div>
          <label>Unit</label>
         <input type="text" name="jumlah_unit" value="" />
        </div>
        <div>
          <label>Harga</label>
         <input type="text" name="harga" value="" />
        </div>
        <div>
          <label>Harga DP</label>
         <input type="text" name="harga_dp" value="" />
        </div>
        <div>
          <label>Foto Cluster</label>
	  
         <input type="file" name="txt_fotocluster" value="" />
        </div>
        <div>
         <button type="submit" name ="update" aria-activedescendant="">Update</button>
        </div>
        <p><a href="cluster.php">Kembali</a></p>
        </section>
      </form> -->
