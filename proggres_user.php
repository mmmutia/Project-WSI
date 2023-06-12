<?php
require ('koneksi.php');
session_start();
error_reporting(0);
$userName = $_SESSION['name'];

// $id_user = $_SESSION['id_user'];

$query_mysql = mysqli_query($koneksi,"select * from user_detail where user_fullname = '$userName'");
$data = mysqli_fetch_array($query_mysql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Progres - Bernady Land Slawu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/logo-bernady.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
          <h2><blockquote>Progres Perumahan</blockquote></h2>
          <style>
            blockquote {
              font-family: 'Times New Roman', Times, serif;
              font-size: larger;
            }
        </style>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Progres Perumahan</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

      <!-- ======= Contact Section ======= -->
      <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

 <div class="container">
   <table class="table-bordered" style="width: 100%;">
     <thead>
       <tr>
         <th>NO</th>
         <th>Id User</th>
         <th>Nama Pemesan</th>
         <th>Status</th>
         <th>Tanggal</th>
         <th>Keterangan</th>
         <th>Foto</th>
       </tr>
     </thead>
     <tbody>
     <br></br>
     
     <?php
     $query_mysql2 = mysqli_query($koneksi,"SELECT pemesanan_rumah.nama_pemesan, proggres.id_user, proggres.tanggal, proggres.id, proggres.id_pemesanan, proggres.status, proggres.keterangan, proggres.foto FROM proggres INNER JOIN pemesanan_rumah ON pemesanan_rumah.id_pemesanan_rumah=proggres.id_pemesanan");
     $no = 1;
     while ($item = mysqli_fetch_array($query_mysql2)) {
       ?>
        <tr class="text-center">
         <td><?php echo $no++?></td>
         <td><?php echo $item['id_user'];?></td>
         <td><?php echo $item['nama_pemesan'];?></td>
         <td><?php echo $item['status'];?></td>
         <td><?php echo $item['tanggal'];?></td>
         <td>
         <div class="align-items-center">
 <button data-modal-target="#modal-keterangan<?php echo $item['id']?>" class="btn btn-outline-primary btn-circle">LIhat Keterangan</button>


 </div>
         </td>
         <!-- <td><?php echo "<img src='./img/proggres/$item[foto]' width='70' height='90' />";?></td> -->
         <td>
         <div class="align-items-center">
 <button data-modal-target="#modal-foto<?php echo $item['id']?>" class="btn btn-outline-primary btn-circle">Lihat Foto</button>


 </div>
         </td>
         <!-- <td>

        
 <div class="align-items-center">
 <button data-modal-target="#modal-edit<?php echo $item['id']?>" class="">Edit</button>
 <button data-modal-target="#modal-delete<?php echo $item['id']?>" class="">Hapus</button>

 </div>
         </td> -->
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
            <form action="admin/progres.php?id=<?= $item['id'] ?>" method="post" enctype="multipart/form-data">

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
            <form action="proggres_user.php" method="post" enctype="multipart/form-data">

            <div class="align-middle text-center">
           
            <img src='./img/proggres/<?php echo $item['foto']?>' width='150' height='150' />
            
            </div><br>

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
            <form action="proggres_user.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Keterangan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="txt_alamat" placeholder="Enter Address" maxlength="500" rows="5"><?php echo $item['keterangan']?></textarea>
              </div><br>


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
            <form action="proggres-user.php" method="post" enctype="multipart/form-data">

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
      <!-- end Pop up Add -->



 

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
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Layanan</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Layanan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Properti Baru</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="pemesanan.php">Pesan Rumah</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="portfolio.html">Cluster Perumahan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Fasilitas</a></li>
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


