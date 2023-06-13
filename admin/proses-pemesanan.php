<?php
require ('../koneksi.php');
session_start();
error_reporting(0);
$userName = $_SESSION['name'];
$id_pemesanan_rumah = $_SESSION['id_pemesanan_rumah'];
$SesLvl = $_SESSION['level'];
$id = $_GET['id'];
$query_mysql = mysqli_query($koneksi, "SELECT * FROM pemesanan_rumah WHERE id_pemesanan_rumah ='$id' ");
$query_mysql2 = mysqli_query($koneksi, "SELECT * FROM detail_pemesanan  WHERE id_pemesanan_rumah='$id'");
$data = mysqli_fetch_array($query_mysql);
$dataa = mysqli_fetch_array($query_mysql2);

if(isset($_POST['add_detail'])){
  $id_detail_pemesanan = $_POST['id_detail_pemesanan'];
  $id_pemesanan_rumah = $_POST['id_pemesanan_rumah'];
  $detail_blok = $_POST['detail_blok'];
  $jumlah_dp = $_POST['jumlah_dp'];
  $cek = "SELECT * FROM detail_pemesanan WHERE id_pemesanan_rumah='$id_pemesanan_rumah'";
    $result_cek = mysqli_query($koneksi, $cek);
    $jumlah = mysqli_num_rows($result_cek);
    // echo "<script>alert('$jumlah');</script>";
    if ($jumlah == 0) {
        $query_nup = "INSERT INTO detail_pemesanan (id_pemesanan_rumah, detail_blok, jumlah_dp) VALUES ('$id_pemesanan_rumah','$detail_blok', '$jumlah_dp')";
        $result = mysqli_query($koneksi, $query_nup);
        if ($result) {
            echo "<script>alert('Data Telah Berhasil Disimpan');window.location='list-pemesanan.php'</script>";
        }
    } elseif ($jumlah > 0) {
        $query = "UPDATE detail_pemesanan SET id_pemesanan_rumah='$id_pemesanan_rumah',detail_blok='$detail_blok', jumlah_dp='$jumlah_dp' WHERE id_detail_pemesanan='$id_detail_pemesanan'";
        $result = mysqli_query($koneksi, $query);
        if ($result) {
            echo "<script>alert('Data Telah Berhasil Disimpan');window.location='list-pemesanan.php'</script>";
      }
    }  
  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Proses Pemesanan - Bernady Land Slawu</title>
    <link href="../img/logo-bernady.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text mx-3">Admin Keuangan</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kelola Data
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="list-pemesanan.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                </svg>
                <span class="ml-3">Data Pemesanan</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pembayaran.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                </svg>
                <span class="ml-3">Pembayaran</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="progres.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                </svg>
                <span class="ml-3">Progres</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $userName ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 text-center">Edit Pemesanan <?php echo $nama_cluster ?></h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 m-auto" style="width: 600px;">
                        <div class="card-body">
            <form action="forms/contact.php" method="get" role="form" class="php-email-form">
              <div class="col">
                <h1 class="text-center"><span>Data Pemesan</span></h1>
                <div class="row-md-6 form-group mb-3">
                  <input type="text" name="idpemesan" class="form-control" id="idpemesan" value="<?php echo $data['id_pemesanan_rumah'];?>" required readonly>
                </div>
                <div class="row-md-6 form-group mb-3">
                  <input type="text" name="namapemesan" class="form-control" id="namapemesan" value="<?php echo $data['nama_pemesan'];?>" required readonly>
                </div>
                <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                  <input type="email" class="form-control" name="alamat" id="alamat" value="<?php echo $data['alamat'];?>" required readonly>
                </div>
                <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                  <input type="email" class="form-control" name="notelp" id="notelp" value="<?php echo $data['no_telp_pemesan'];?>" required readonly>
                </div>
                <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                  <input type="email" class="form-control" name="idcluster" id="idcluster" value="<?php echo $data['id_cluster'];?>" required readonly >
                </div>
                <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                  <input type="email" class="form-control" name="tglpemesan" id="tglpemesan" value="<?php echo $data['tgl_pemesanan'];?>" required readonly>
                </div>
                <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                  <input type="email" class="form-control" name="jenispembayaran" id="jenispembayaran" value="<?php echo $data['jenis_pembayaran'];?>" required readonly>
                </div>
                <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
                <img src="../img/filepemesanan/<?php echo $data['fotocopy_ktp']; ?>"  height="200px">
                </div>
              </div>
           
              <!-- <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required disabled>
              </div> -->
              <!-- <div class="text-center"><button type="submit">Send Message</button></div> -->
            </form>
          </div>
          <div class="col">
                <h1 class="text-center"><span> Detail Blok Rumah </span></h1>
          <div class="col-lg-4 m-auto">
          <form action="" method="post" >
              <div class="row">
                <div class="row-md-6 form-group mb-3 text-center">
                  <input type="text" name="id_pemesanan_rumah" class="form-control" id="id_pemesanan_rumah" placeholder="Masukkan ID Pemesanan Rumah" value="<?php echo $data['id_pemesanan_rumah'];?>">
                  <input type="text" name="id_detail_pemesanan" class="form-control" id="id_detail_pemesanan" placeholder="Masukkan ID Pemesanan Rumah" value="<?php echo $dataa['id_detail_pemesanan'];?>" hidden>
                </div>
                <div class="row-md-6 form-group mb-3 text-center">
                  <input type="text" name="detail_blok" class="form-control" id="detail_blok" placeholder="Masukkan Blok" value="<?php echo $dataa['detail_blok'];?>">
                </div>
                <div class="row-md-6 form-group mb-3 text-center">
                  <input type="text" name="jumlah_dp" class="form-control" id="jumlah_dp" placeholder="Jumlah DP" value="<?php echo $dataa['jumlah_dp'];?>">
                </div>
                <div class="form-group mb-3 text-center">
                  <button type="submit" class="btn btn-outline-info" name="add_detail" style="width: 400px; margin-left: -100px;">Simpan</button>
                </div> 
            </form>
                    </div>
                </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2021</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>