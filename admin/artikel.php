<?php
  include "layout/header.php";
  if(!$_SESSION['login']) {
    header('location:login.php');
  }
  if( isset($_GET['hal']) ) {
   if($_GET['hal'] == "hapus") {
      $hapus = mysqli_query($con, "DELETE FROM artikel where id_artikel = '$_GET[id]'");
      if($hapus) {
        // Pesan untuk data yang berhasl dihapus
        echo "<script>alert('Data produk berhasil dihapus'); window.location.href='artikel.php'</script>";
      } else {
        // Pesan untuk data yang gagal dihapusz
        echo "<script>alert('Data produk gagal dihapus'); window.location.href='artikel.php'</script>";
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
      <!-- JavaScript -->
      <script src="assets/js/boostrap.js"></script>
      <!-- Admin CSS -->
      <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    </head>
    <body>
      <h2 style="color: #520074; font-family: Calibri; font-style: italic; font-size: 35px;"><b>List Artikel</b></h2>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data</li>
          <li class="breadcrumb-item active">List Artikel</li>
        </ol>
      </nav>
      <div class="max-auto" style="width: 100%;">
        <!-- Untuk Output Data Artikel -->
          <div class="card">
            <div class="card-header bg-secondary text-white" style="font-family: Calibri; font-size: 17px;">
              <b>Data Artikel</b>
              <a href="tambah_artikel.php" class="btn btn-primary btn-sm float-right">Tambah Data</a>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <tr>
                  <th style="padding: 5px; text-align: center;">#</th>
                  <th style="padding: 5px; text-align: center;">Judul</th>
                  <th style="padding: 5px; text-align: center;">Isi</th>
                  <th style="padding: 5px; text-align: center;">Gambar</th>
                  <th style="padding: 5px; text-align: center;">Aksi</th>
                </tr>
                <?php
                  $query = mysqli_query($con, "SELECT * FROM artikel order by id_artikel DESC");
                  $no = 1;
                  while ( $data = mysqli_fetch_assoc($query) ) :
                ?>
                  <tr>
                    <td style="padding: 10px; font-size: 14px;"><?=$no++;?></td>
                    <td style="padding: 10px; font-size: 14px;"><?=$data['judul_artikel']?></td>
                    <td style="padding: 10px; font-size: 14px;"><?=$data['isi_artikel']?></td>
                    <td style="padding: 10px;">
                      <img src="../upload/<?=$data['gambar_artikel']?>" style="width:90px">
                    </td>
                    <td style="padding: 10px">
                      <a href="tambah_artikel.php?hal=edit&id=<?=$data['id_artikel']?>" class="btn btn-outline-info btn-sm" style="padding: -10px; margin: 5px;">Edit</a>
                      <a href="artikel.php?hal=hapus&id=<?=$data['id_artikel']?>" style="margin: 5px;" onclick="return confirm('Apakah yakin akan menghapus data ini?')" class="btn btn-outline-danger btn-sm">Hapus</a>
                    </td>
                  </tr>
                <?php
                  endwhile;
                ?>
              </table>
            </div>
          </div>
        <!-- akhir Output Data Artikel -->
      </div>
      <script type="text/css" src="assets/js/bootstrap.min.js"></script>
    </body>
  </html>
<?php
  include "layout/footer.php";
?>