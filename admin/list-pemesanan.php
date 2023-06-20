<?php
require('../koneksi.php');
session_start();
error_reporting(0);
$userName = $_SESSION['name'];
$id_pemesanan_rumah = $_SESSION['id_pemesanan_rumah'];
$userLvl = $_SESSION['level'];

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Keuangan - Bernady Land Slawu</title>
    <!-- Favicons -->
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
                <a class="nav-link" href="index-keuangan.php">
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
                    <div class="row">
                        <h1 class="h3 mb-2 text-gray-800">Data Pemesanan Rumah</h1>
                        
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Pemesanan Rumah</th>
                                            <th>Nama Pemesan</th>
                                            <th>Alamat</th>
                                            <th>No Telp</th>
                                            <th>ID Cluster</th>
                                            <th>Tanggal Pemesanan</th>
                                            <th>Jenis Pembayaran</th>
                                            <th>Foto KTP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT pemesanan_rumah.id_pemesanan_rumah, pemesanan_rumah.nama_pemesan, pemesanan_rumah.alamat, pemesanan_rumah.no_telp_pemesan, pemesanan_rumah.id_cluster, pemesanan_rumah.tgl_pemesanan, pemesanan_rumah.fotocopy_ktp, pemesanan_rumah.jenis_pembayaran FROM pemesanan_rumah JOIN cluster ON pemesanan_rumah.id_cluster = cluster.id_cluster ORDER BY id_pemesanan_rumah ASC";
                                        $result = mysqli_query($koneksi, $query);
                                        $no = 1;

                                        while ($row = mysqli_fetch_array($result)) {
                                            $id_pemesanan_rumah = $row['id_pemesanan_rumah'];
                                            $nama_pemesan = $row['nama_pemesan'];
                                            $alamat = $row['alamat'];
                                            $no_telp_pemesan = $row['no_telp_pemesan'];
                                            $id_cluster = $row['id_cluster'] - $row['nama_cluster'];
                                            $tgl_pemesanan = $row['tgl_pemesanan'];
                                            $jenis_pembayaran = $row['jenis_pembayaran'];
                                            $focopy_ktp = $row['fotocopy_ktp'];
                                        ?>
                                            <tr class="text-center">
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $id_pemesanan_rumah; ?></td>
                                                <td><?php echo $nama_pemesan; ?></td>
                                                <td><?php echo $alamat; ?></td>
                                                <td><?php echo $no_telp_pemesan; ?></td>
                                                <td><?php echo $id_cluster; ?></td>
                                                <td><?php echo $tgl_pemesanan; ?></td>
                                                <td><?php echo $jenis_pembayaran; ?></td>
                                                <td>
                                                <div class="align-items-center">
                                                <button data-modal-target="#modal-foto<?php echo $id_pemesanan_rumah ?>" class="btn btn-outline-primary btn-circle"><i class="fa fa-eye"></i></button>
                                                </div>
                                                </td>
                                                <td>
                                                    <a href="proses-pemesanan.php?id=<?php echo $row['id_pemesanan_rumah']; ?>" class="btn btn-info btn-circle <?php echo $dis; ?>"><i class="fa fa-plus"></i></a>
                                                    <a href="hapus_pemesanan.php?id=<?php echo $row['id_pemesanan_rumah']; ?>" class="btn btn-danger btn-circle <?php echo $dis; ?>"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
                 <!-- Pop up Foto -->
      <div class="modal-foto" id="modal-foto<?= $id_pemesanan_rumah ?>">
        <div class="modal-header-foto">
          <h2 class="foto">Fotocopy KTP</h2>
          <!-- <button data-close-add class="close-btn-add">&times;</button> -->

          <div class="modal-body-foto">
            <form action="list-pemesanan.php" method="post" enctype="multipart/form-data">

            <div class="align-middle text-center">
           
            <img src='../img/filepemesanan/<?php echo $focopy_ktp?>' width='300' height='300' />
            
            </div>

              <div class="align-middle text-center"><br>
                
                <button class="btn btn-danger btn-md ms-auto" data-close-fot>Close</button>
              </div>


            </form>
          </div>
        </div>
      </div>
      <style>
        .modal-foto {
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

        .modal-body-foto {
          padding: 10px;
          bottom: 10px;
        }

        .modal-header-foto {
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

        p.foto {
          line-height: 1.6;
          margin-bottom: 20px;
        }

        h2.foto {
          text-align: center;

        }

        .modal-header-foto button.close-btn-foto {
          position: absolute;
          right: 10px;
          top: 10px;
          font-size: 32px;
          background: none;
          outline: none;
          border: none;
          cursor: pointer;
        }

        .modal-header-foto button.close-btn-foto:hover {
          color: #6b46c1;
        }

        .active-foto {
          opacity: 1;
          pointer-events: auto;
        }
      </style>
      <script>
        const openModalFot = document.querySelectorAll("[data-modal-target]");
        const closeModalFot = document.querySelectorAll(
          "[data-close-fot]"
        );

        openModalFot.forEach((button) => {
          button.addEventListener("click", () => {
            const modal = document.querySelector(button.dataset.modalTarget);
            openModal(modal);
          });
        });

        closeModalFot.forEach((button) => {
          button.addEventListener("click", () => {
            const modal = button.closest(".modal-foto");
            closeModal(modal);
          });
        });

        function openModal(modal) {
          if (modal == null) return;
          modal.classList.add("active-foto");
        }

        function closeModal(modal) {
          if (modal == null) return;
          modal.classList.remove("active-foto");
        }
      </script>
      <!-- end Pop up Foto -->
    </div>
    <!-- End of Page Wrapper -->
    </div>

                <!-- /.container-fluid -->

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
<script language="JavaScript" type="text/javascript">
    function del(id) {
        if (confirm("yakin akan menghapus data ini?")) {
            window.location.href = '../admin/list-pemesanan.php?id=' + id;
        }
    }
</script>

</html>
