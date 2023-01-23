<?php
  include "layout/header.php";
  if(!$_SESSION['login']) {
    header('location:login.php');
  }
  if( isset($_POST['submit']) ) {
    if($_GET['hal'] == "edit") {
      $judul    = $_POST['judul'];
      $isi      = $_POST['isi'];
      $gambar   = $_FILES['gambar']['name'];
      if( !empty($gambar) ) {
        move_uploaded_file($_FILES['gambar']['tmp_name'],"../upload/".$gambar);
        $query = mysqli_query($con, "UPDATE artikel set gambar_artikel = '$gambar' where id_artikel = '$_GET[id]'");
      }
      $edit = mysqli_query($con, "UPDATE artikel set judul_artikel = '$judul', isi_artikel = '$isi' where id_artikel = '$_GET[id]'");
      if($edit) {
        // Pesan untuk data yang berhasl diubah
        echo "<script>alert('Data produk berhasil diubah'); window.location.href='artikel.php'</script>";
      } else {
        // Pesan untuk data yang gagal diubah
        echo "<script>alert('Data produk gagal diubah'); window.location.href='artikel.php'</script>";
      }
    } else {
      $judul    = $_POST['judul'];
      $isi      = $_POST['isi'];
      $gambar   = $_FILES['gambar']['name'];
      move_uploaded_file($_FILES['gambar']['tmp_name'],"../upload/".$gambar);
      $query = mysqli_query($con, "INSERT INTO artikel (judul_artikel,isi_artikel,gambar_artikel) VALUE ('$judul','$isi','$gambar')");
      if($query) {
        // Pesan untuk data yang berhasl disimpan
        echo "<script>alert('Data produk berhasil ditambahkan'); window.location.href='artikel.php'</script>";
      } else {
        // Pesan untuk data yang gagal disimpan
        echo "<script>alert('Data produk gagal ditambahkan'); window.location.href='artikel.php'</script>";
      }
    }
  }
  if( isset($_GET['hal']) ) {
    if($_GET['hal'] == "edit") {
      $query = mysqli_query($con, "SELECT * FROM artikel where id_artikel = ' $_GET[id]'");
      $data = mysqli_fetch_assoc($query);
      if($data) {
        $vjudul     = $data['judul_artikel'];
        $visi       = $data['isi_artikel'];
        $vgambar    = $data['gambar_artikel'];
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
      <h2 style="color: #520074; margin: 10px 5px; font-family: Calibri; font-style: italic; font-size: 35px;"><b>List Artikel</b></h2>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data</li>
          <li class="breadcrumb-item active">
            <a href="artikel.php">List Artikel</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Create/Edit Data Artikel</li>
        </ol>
      </nav>
      <div class="max-auto" style="width: 100%;">
        <!-- Untuk Input Data Artikel -->
          <div class="card">
            <div class="card-header bg-primary text-white">
              <b>Create / Edit Data Artikel</b>
            </div>
            <div class="card-body" style="padding: 20px;">
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">Judul</label>
                  <div class="col-sm-10" style="margin-left: -50px;">
                    <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul Artikel" value="<?=@$vjudul?>">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">Isi</label>
                  <div class="col-sm-10" style="margin-left: -50px;">
                    <textarea class="form-control" name="isi" rows="2" placeholder="Masukkan Isi Artikel"><?=@$visi?></textarea>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">Gambar</label>
                  <div class="col-sm-10" style="margin-left: -50px;">
                    <input type="file" name="gambar" value="<?=@$vgambar?>">
                  </div>
                </div>
                <div class="col-10">
                  <input type="submit" name="submit" value="Simpan Data" class="btn btn-outline-success btn-sm" style="margin-left: -15px;">
                  <input type="reset" name="reset" class="btn btn-outline-danger btn-sm" value="Besihkan" style="margin-left: 10px;"/>
                </div>
              </form>
            </div>
          </div>
        <!-- akhir Input Data Artikel -->
      </div>
      <script type="text/css" src="assets/js/bootstrap.min.js"></script>
    </body>
  </html>
<?php
  include "layout/footer.php";
?>