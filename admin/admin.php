<?php
  include "layout/header.php";
  if(!$_SESSION['login']) {
    header('location:login.php');
  }
  if( isset($_GET['hal']) ) {
    if($_GET['hal'] == "hapus") {
      $hapus = mysqli_query($con, "DELETE FROM admin where id_admin = '$_GET[id]'");
      if($hapus) {
        // Pesan untuk data yang berhasl dihapus
        echo "<script>alert('Data produk berhasil dihapus'); window.location.href='admin.php'</script>";
      } else {
        // Pesan untuk data yang gagal dihapus
        echo "<script>alert('Data produk gagal dihapus'); window.location.href='admin.php'</script>";
      }
    }
  }
?>
  <html>
    <head>
      <!-- META -->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- BOOSTSTRAP -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <!-- CSS -->
      <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    </head>
    <body>
      <h2 style="color: #520074; margin: 10px 5px; font-family: Calibri; font-style: italic; font-size: 35px;"><b>List Admin</b></h2>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data</li>
          <li class="breadcrumb-item active">List Admin</li>
        </ol>
      </nav>
      <div class="mx-auto" style="width: 100%;">
        <!-- Untuk Output Data Admin -->
          <div class="card">
            <div class="card-header text-white bg-secondary" style="font-family: Calibri; font-size: 17px;">
              <b>Data Admin</b>
              <a href="tambah_admin.php" class="btn btn-primary btn-sm float-right">Tambah Data</a>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <tr>
                  <th style="padding: 5px; text-align: center;">#</th>
                  <th style="padding: 5px; text-align: center;">Nama Admin</th>
                  <th style="padding: 5px; text-align: center;">Username</th>
                  <th style="padding: 5px; text-align: center;">Password</th>
                  <th style="padding: 5px; text-align: center;">Aksi</th>
                </tr>
                <?php
                  $query = mysqli_query($con, "SELECT * FROM admin order by id_admin DESC");
                  $no = 1;
                  while ( $data = mysqli_fetch_assoc($query) ) :
                ?>
                  <tr>
                    <td style="padding: 5px; text-align: center;"><?=$no++;;?></td>
                    <td style="padding: 5px;"><?=$data['nama_admin'];?></td>
                    <td style="padding: 5px;"><?=$data['user_admin'];?></td>
                    <td style="padding: 5px;"><?=$data['pass_admin'];?></td>
                    <td style="padding: 5px">
                      <a href="tambah_admin.php?hal=edit&id=<?=$data['id_admin']?>" class="btn btn-outline-info btn-sm" style="padding: 5px 10px; margin-left: 10px;">Edit</a>
                      <a href="admin.php?hal=hapus&id=<?=$data['id_admin']?>" style="padding: 5px 10px; margin-left: 10px;" onclick="return confirm('Apakah yakin akan menghapus data ini?')" class="btn btn-outline-danger btn-sm">Hapus</a>
                    </td>
                  </tr>
                <?php 
                  endwhile;
                ?>
              </table>
            </div>
          </div>
        <!-- akhir Output Data Admin -->
      </div>
      <script type="text/css" src="assets/js/bootstrap.min.js"></script>
    </body>   
  </html>
<?php
  include "layout/footer.php";
?>