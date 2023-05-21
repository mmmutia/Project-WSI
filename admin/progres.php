<?php
require('../koneksi.php');
session_start();
error_reporting(0);
$userName = $_SESSION['name'];?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Progres - Bernady Land Slawu</title>
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
                <div class="sidebar-brand-text mx-3">Progres</div>
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
                <a class="nav-link" href="pembayaran.php">
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
                    <div class="container">
                    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

<div class="container">
 <div class="d-flex justify-content-between align-items-center">
 <button data-modal-target="#modal-add"  class="">Tambah Proggres</button>

 </div>
</div>

<br></br>


 <div class="container">
   <table class="table-bordered" style="width: 100%;">
     <thead>
       <tr>
         <th>NO</th>
         <th>Id Pemesanan</th>
         <th>Id User</th>
         <th>Nama Pemesan</th>
         <th>Status</th>
         <th>Tanggal</th>
         <th>Keterangan</th>
         <th>Foto</th>
         <th>Action</th>
       </tr>
     </thead>
     <tbody>

     
     <?php
     $query_mysql2 = mysqli_query($koneksi,"SELECT pemesanan_rumah.nama_pemesan, proggres.id_user, proggres.tanggal, proggres.id, proggres.id_pemesanan, proggres.status, proggres.keterangan, proggres.foto FROM proggres INNER JOIN pemesanan_rumah ON pemesanan_rumah.id_pemesanan_rumah=proggres.id_pemesanan");
     $no = 1;
     while ($item = mysqli_fetch_array($query_mysql2)) {
       ?>
        <tr class="text-center">
         <td><?php echo $no++?></td>
         <td><?php echo $item['id_pemesanan_rumah'];?></td>
         <td><?php echo $item['id_user'];?></td>
         <td><?php echo $item['nama_pemesan'];?></td>
         <td><?php echo $item['status'];?></td>
         <td><?php echo $item['tanggal'];?></td>
         <td>
         <div class="align-items-center">
 <button data-modal-target="#modal-keterangan<?php echo $item['id']?>" class="">Lihat Keterangan</button>


 </div>
         </td>
         <!-- <td><?php echo "<img src='./img/proggres/$item[foto]' width='70' height='90' />";?></td> -->
         <td>
         <div class="align-items-center">
 <button data-modal-target="#modal-foto<?php echo $item['id']?>" class="">Lihat Foto</button>


 </div>
         </td>
         <td>

        
 <div class="align-items-center">
 <button data-modal-target="#modal-edit<?php echo $item['id']?>" class="">Edit</button>
 <button data-modal-target="#modal-delete<?php echo $item['id']?>" class="">Hapus</button>

 </div>


         </td>
       </tr>

          <!-- Pop up Delete -->

          <div class="modal-delete" id="modal-delete<?= $item['id'] ?>">
                     <div class="modal-header-delete">
                       <h2 class="delete">Warning</h2>
                       <!-- <button data-close-delete class="close-btn-delete">&times;</button> -->

                       <div class="modal-body-delete">
                         <div class="row">

                           <p class="delete">
                             Yakin ingin menghapus data <?php echo $item['nama_pemesan'] ?> ?
                           </p>

                         </div>
                         <div></div>
                         <div></div>
                         <form class="yayyay" action="proggres.php?id=<?= $item['id'] ?>" method="post">
                           <div class="align-middle text-center">
                             <button class="btn btn-success btn-sm ms-auto" type="submit" name="delete">Delete</button>
                             <!-- <a class="btn btn-success btn-sm ms-auto" href="users.view.php?id=<?= $row['id'] ?>">Delete</a> -->
                             <a href="proggres.php" class="btn btn-danger btn-sm ms-auto">Close</a>
                             <!-- <button class="btn btn-success btn-sm ms-auto" name="submit" data-close-delete>Close</button> -->
                             <!-- <button class="btn btn-danger btn-sm ms-auto" href="hapus_user.php?id=<?php echo $row['id']; ?>" data-close-delete>Close</button> -->
                         </form>
                       </div>


                     </div>
                   </div>
           </div>



           <style>
             .modal-delete {
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

             .modal-body-delete {
               padding: 10px;
               bottom: 10px;
             }

             .modal-header-delete {
               background: white;
               width: 560px;
               max-width: 90%;
               padding: 20px;
               border-radius: 4x;
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

             p.delete {
               line-height: 1.6;
               margin-bottom: 20px;
               text-align: center;
             }

             h2.delete {
               text-align: center;

             }

             .modal-header-delete button.close-btn-delete {
               position: absolute;
               right: 10px;
               top: 10px;
               font-size: 32px;
               background: none;
               outline: none;
               border: none;
               cursor: pointer;
             }

             .modal-header-delete button.close-btn-delete:hover {
               color: #6b46c1;
             }

             .active-delete {
               opacity: 1;
               pointer-events: auto;
             }
           </style>
           <script>
             const openModalDelete = document.querySelectorAll("[data-modal-target]");
             const closeModalDelete = document.querySelectorAll(
               "[data-close-delete]"
             );

             openModalDelete.forEach((button) => {
               button.addEventListener("click", () => {
                 const modal = document.querySelector(button.dataset.modalTarget);
                 openModal(modal);
               });
             });

             closeModalDelete.forEach((button) => {
               button.addEventListener("click", () => {
                 const modal = button.closest(".modal-delete");
                 closeModal(modal);
               });
             });

             function openModal(modal) {
               if (modal == null) return;
               modal.classList.add("active-delete");
             }

             function closeModal(modal) {
               if (modal == null) return;
               modal.classList.remove("active-delete");
             }
           </script>
           <!-- end Pop up Delete -->


         <!-- Pop up Edit -->
 <div class="modal-edit" id="modal-edit<?= $item['id'] ?>">
   <div class="modal-header-edit">
     <h2 class="edit">Edit Form</h2>
     <!-- <button data-close-add class="close-btn-add">&times;</button> -->

     <div class="modal-body-edit">
       <form action="proggres.php?id=<?= $item['id'] ?>" method="post" enctype="multipart/form-data">

       <div class="form-group">
           <label for="exampleFormControlSelect1">Id User</label>


           <select class="form-control" name="id_user_edit" required>
           <option value='<?php echo $item['id_user'];?>'> <?php echo $item['nama_pemesan'];?></option>
             <?php
            
             $query = mysqli_query($koneksi, "select * from pemesanan_rumah");
             while ($row = mysqli_fetch_array($query)) {
               echo "<option value=$row[id_pemesanan_rumah]> $row[id_pemesanan_rumah] - $row[nama_pemesan]</option>";
             }
             ?>


           </select>

         </div>

       <div class="form-group">
           <label for="exampleFormControlSelect1">Id Pemesanan</label>


           <select class="form-control" name="id_pemesanan_edit" required>
           <option value='<?php echo $item['id_pemesanan'];?>'><?php echo $item['id_pemesanan'];?> - <?php echo $item['nama_pemesan'];?></option>
             <?php
            
             $query = mysqli_query($koneksi, "select * from pemesanan_rumah");
             while ($row = mysqli_fetch_array($query)) {
               echo "<option value=$row[id_pemesanan_rumah]> $row[id_pemesanan_rumah] - $row[nama_pemesan]</option>";
             }
             ?>


           </select>

         </div>

         <div class="form-group">
           <label for="exampleFormControlSelect1">Status</label>


           <select class="form-control" name="status_edit" required>
           <option value="<?php echo $item['status'];?>"><?php echo $item['status'];?></option>
           <option value="Selesai">Selesai</option>
           <option value="Pengerjaan">Pengerjaan</option>
           
           </select>

         </div>

        

         <div class="form-group">
           <label for="exampleFormControlTextarea1">Keterangan</label>
           <textarea class="form-control" id="exampleFormControlTextarea1" name="keterangan_edit" placeholder="Enter Address" maxlength="500" rows="2"><?php echo $item['keterangan'];?></textarea>
         </div>


         <div class="form-group">
           <label class="custom-file-label" for="customFileLang">Upload Proggres</label>
           <input type="file" class="form-control" id="foto" name="fotoedit" id="foto">

         </div>


         <div class="align-middle text-center">
           <button class="btn btn-success btn-sm ms-auto" id="add-user" name="edit-user">Add</button>
           <button class="btn btn-danger btn-sm ms-auto" data-close-edit>Close</button>
         </div>


       </form>
     </div>
   </div>
 </div>
 <style>
   .modal-edit {
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
     z-index: 1000000;
   }

   .modal-body-edit {
     padding: 10px;
     bottom: 10px;
   }

   .modal-header-edit {
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

   p.edit {
     line-height: 1.6;
     margin-bottom: 20px;
   }

   h2.edit {
     text-align: center;

   }

   .modal-header-edit button.close-btn-edit {
     position: absolute;
     right: 10px;
     top: 10px;
     font-size: 32px;
     background: none;
     outline: none;
     border: none;
     cursor: pointer;
   }

   .modal-header-edit button.close-btn-edit:hover {
     color: #6b46c1;
   }

   .active-edit {
     opacity: 1;
     pointer-events: auto;
   }
 </style>
 <script>
   const openModalEdit = document.querySelectorAll("[data-modal-target]");
   const closeModalEdit = document.querySelectorAll(
     "[data-close-edit]"
   );

   openModalEdit.forEach((button) => {
     button.addEventListener("click", () => {
       const modal = document.querySelector(button.dataset.modalTarget);
       openModal(modal);
     });
   });

   closeModalEdit.forEach((button) => {
     button.addEventListener("click", () => {
       const modal = button.closest(".modal-edit");
       closeModal(modal);
     });
   });

   function openModal(modal) {
     if (modal == null) return;
     modal.classList.add("active-edit");
   }

   function closeModal(modal) {
     if (modal == null) return;
     modal.classList.remove("active-edit");
   }
 </script>
 <!-- end Pop up Edit -->


        <!-- Pop up Foto -->
 <div class="modal-foto" id="modal-foto<?= $item['id'] ?>">
   <div class="modal-header-foto">
     <h2 class="foto">Foto</h2>
     <!-- <button data-close-add class="close-btn-add">&times;</button> -->

     <div class="modal-body-foto">
       <form action="proggres.php" method="post" enctype="multipart/form-data">

       <div class="align-middle text-center">
      
       <img src='img/proggres/<?php echo $item['foto']?>' width='150' height='150' />
       
       </div>

         <div class="align-middle text-center">
           
           <button class="btn btn-danger btn-sm ms-auto" data-close-fot>Close</button>
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

        <!-- Pop up Keterangan -->
 <div class="modal-keterangan" id="modal-keterangan<?= $item['id'] ?>">
   <div class="modal-header-keterangan">
     <h2 class="keterangan">Keterangan</h2>
     <!-- <button data-close-add class="close-btn-add">&times;</button> -->

     <div class="modal-body-keterangan">
       <form action="proggres.php" method="post" enctype="multipart/form-data">

       <div class="form-group">
           <label for="exampleFormControlTextarea1">Keterangan</label>
           <textarea class="form-control" id="exampleFormControlTextarea1" name="txt_alamat" placeholder="Enter Address" maxlength="500" rows="5"><?php echo $item['keterangan']?></textarea>
         </div>


         <div class="align-middle text-center">
           
           <button class="btn btn-danger btn-sm ms-auto" data-close-keterangan>Close</button>
         </div>


       </form>
     </div>
   </div>
 </div>
 <style>
   .modal-keterangan {
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

   .modal-body-keterangan {
     padding: 10px;
     bottom: 10px;
   }

   .modal-header-keterangan {
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

   p.keterangan {
     line-height: 1.6;
     margin-bottom: 20px;
   }

   h2.keterangan {
     text-align: center;

   }

   .modal-header-keterangan button.close-btn-keterangan {
     position: absolute;
     right: 10px;
     top: 10px;
     font-size: 32px;
     background: none;
     outline: none;
     border: none;
     cursor: pointer;
   }

   .modal-header-keterangan button.close-btn-keterangan:hover {
     color: #6b46c1;
   }

   .active-keterangan {
     opacity: 1;
     pointer-events: auto;
   }
 </style>
 <script>
   const openModalKet = document.querySelectorAll("[data-modal-target]");
   const closeModalKet = document.querySelectorAll(
     "[data-close-keterangan]"
   );

   openModalKet.forEach((button) => {
     button.addEventListener("click", () => {
       const modal = document.querySelector(button.dataset.modalTarget);
       openModal(modal);
     });
   });

   closeModalKet.forEach((button) => {
     button.addEventListener("click", () => {
       const modal = button.closest(".modal-keterangan");
       closeModal(modal);
     });
   });

   function openModal(modal) {
     if (modal == null) return;
     modal.classList.add("active-keterangan");
   }

   function closeModal(modal) {
     if (modal == null) return;
     modal.classList.remove("active-keterangan");
   }
 </script>
 <!-- end Pop up keterangan -->



       <?php
     }
     ?>
     </tbody>
   </table>

 </div>
</section><!-- End Contact Section -->


 <!-- Pop up Add -->
 <div class="modal-add" id="modal-add">
   <div class="modal-header-add">
     <h2 class="add">Add Form</h2>
     <!-- <button data-close-add class="close-btn-add">&times;</button> -->

     <div class="modal-body-add">
       <form action="proggres.php" method="post" enctype="multipart/form-data">

       <div class="form-group">
           <label for="exampleFormControlSelect1">Id User</label>


           <select class="form-control" name="id_user" required>
           <option value='#'> Pilih Id user</option>
             <?php
             $query = mysqli_query($koneksi, "select * from user_detail where level = '4'");
             while ($row = mysqli_fetch_array($query)) {
               echo "<option value=$row[id_user]>$row[id_user] - $row[user_fullname]</option>";
             }
             ?>


           </select>

         </div>

       <div class="form-group">
           <label for="exampleFormControlSelect1">Id Pemesanan</label>


           <select class="form-control" name="id_pemesanan" required>
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
           <label for="exampleFormControlSelect1">Kategori</label>


           <select class="form-control" name="status" required>
           <option value="#">Pilih Status</option>
           <option value="Selesai">Selesai</option>
           <option value="Pengerjaan">Pengerjaan</option>
           
           </select>

         </div>

        

         <div class="form-group">
           <label for="exampleFormControlTextarea1">Keterangan</label>
           <textarea class="form-control" id="exampleFormControlTextarea1" name="keterangan" placeholder="Enter Keterangan" maxlength="500" rows="2"></textarea>
         </div>


         <div class="form-group">
           <label class="custom-file-label" for="customFileLang">Upload Proggres</label>
           <input type="file" class="form-control" id="foto" name="foto_proggres" id="foto" required>

         </div>


         <div class="align-middle text-center">
           <button class="btn btn-success btn-sm ms-auto" name="add-proggres">Add</button>
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
<script language="JavaScript" type="text/javascript">
    function del(id) {
        if (confirm("yakin akan menghapus data ini?")) {
            window.location.href = '../hapus_cluster.php?id=' + id;
        }
    }
</script>

</html>