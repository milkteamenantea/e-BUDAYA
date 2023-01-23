<?php
  include "layout/header.php";
  if(!$_SESSION['login']) {
    header('location:login.php');
  }
  if( isset($_GET['hal']) ) {
    if($_GET['hal'] == "hapus") {
       $hapus = mysqli_query($con, "DELETE FROM provinsi where id_prov = '$_GET[id]'");
       if($hapus) {
         // Pesan untuk data yang berhasl dihapus
         echo "<script>alert('Data produk berhasil dihapus'); window.location.href='provinsi.php'</script>";
       } else {
         // Pesan untuk data yang gagal dihapus
         echo "<script>alert('Data produk gagal dihapus'); window.location.href='provinsi.php'</script>";
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
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- CSS -->
      <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    </head>
    <body>
      <h2 style="color: #520074; font-family: Calibri; font-style: italic; font-size: 35px;"><b>List Provinsi</b></h2>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data</li>
          <li class="breadcrumb-item active">List Provinsi</li>
        </ol>
      </nav>
      <div class="max-auto" style="width: 100%;">
        <!-- Untuk Output Data Provinsi -->
          <div class="card">
            <div class="card-header bg-secondary text-white" style="font-family: Calibri; font-size: 17px;">
              <b>Data Provinsi</b>
              <a href="tambah_prov.php" class="btn btn-primary btn-sm float-right">Tambah Data</a>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <tr>
                  <th style="font-size: 13px; text-align: center;">#</th>
                  <th style="font-size: 13px; text-align: center;">Nama</th>
                  <th style="font-size: 13px; text-align: center;">Isi</th>
                  <th style="font-size: 13px; text-align: center;">Gambar</th>
                  <th style="font-size: 13px; text-align: center;">Rumah</th>
                  <th style="font-size: 13px; text-align: center;">Pakaian</th>
                  <th style="font-size: 13px; text-align: center;">Tarian</th>
                  <th style="font-size: 13px; text-align: center;">Senjata</th>
                  <th style="font-size: 13px; text-align: center;">Alat Musik</th>
                  <th style="font-size: 13px; text-align: center;">Makanan</th>
                  <th style="font-size: 13px; text-align: center;">Aksi</th>
                </tr>
                <?php
                  $query = mysqli_query($con, "SELECT * FROM provinsi order by id_prov DESC");
                  $no = 1;
                  while ( $data = mysqli_fetch_assoc($query) ) :
                ?>
                  <tr>
                    <td style="padding: 5px; text-align: center; font-size: 12px;"><?=$no++;?></td>
                    <td style="padding: 5px; font-size: 12px;"><?=$data['nama_prov']?></td>
                    <td style="padding: 5px; font-size: 12px;"><?=substr($data['isi_prov'],0,50). "..."?></td>
                    <td style="padding: 5px">
                      <img src="../upload/<?=$data['gambar_prov']?>" style="width:90px;">
                    </td>
                    <td style="padding: 5px; font-size: 12px;"><?=substr($data['isi_rmh'],0,30). "..."?></td>
                    <td style="padding: 5px; font-size: 12px;"><?=substr($data['isi_pakaian'],0,30). "..."?></td>
                    <td style="padding: 5px; font-size: 12px;"><?=substr($data['isi_tari'],0,30). "..."?></td>
                    <td style="padding: 5px; font-size: 12px;"><?=substr($data['isi_senjata'],0,30). "..."?></td>
                    <td style="padding: 5px; font-size: 12px;"><?=substr($data['isi_alat'],0,30). "..."?></td>
                    <td style="padding: 5px; font-size: 12px;"><?=substr($data['isi_mkn'],0,30). "..."?></td>
                    <td style="padding: 5px">
                      <a href="tambah_prov.php?hal=edit&id=<?=$data['id_prov']?>" class="btn btn-outline-info btn-sm" style="padding: -10px; margin: 5px;">Edit</a>

                      <a href="provinsi.php?hal=hapus&id=<?=$data['id_prov']?>" style="margin: 5px;" onclick="return confirm('Apakah yakin akan menghapus data ini?')" class="btn btn-outline-danger btn-sm">Hapus</a>
                    </td>
                  </tr>
                <?php
                  endwhile;
                ?>
              </table>
            </div>
          </div>
        <!-- akhir Output Data Provinsi -->
      </div>
      <script type="text/css" src="assets/js/bootstrap.min.js"></script>
    </body>
  </html>
<?php
  include "layout/footer.php";
?>