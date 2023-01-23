<?php
  include "layout/header.php";
  if(!$_SESSION['login']) {
    header('location:login.php');
  }
  if( isset($_POST['submit']) ) {
    if($_GET['hal'] == "edit") {
      $nama     = $_POST['nama'];
      $desc     = $_POST['desc'];
      $rmh      = $_POST['rmh'];
      $pakaian  = $_POST['pakaian'];
      $tari     = $_POST['tari'];
      $senjata  = $_POST['senjata'];
      $alat     = $_POST['alat'];
      $mkn      = $_POST['mkn'];
      $gambar   = $_FILES['gambar']['name'];
      if( !empty($gambar) ) {
        move_uploaded_file($_FILES['gambar']['tmp_name'],"../upload/".$gambar);
        $query = mysqli_query($con, "UPDATE provinsi set gambar_prov = '$gambar' where id_prov = '$_GET[id]'");
      }
      $edit = mysqli_query($con, "UPDATE provinsi set nama_prov = '$nama', isi_prov = '$desc', isi_rmh = '$rmh', isi_pakaian = '$pakaian', isi_tari = '$tari', isi_senjata = '$senjata', isi_alat = '$alat', isi_mkn = '$mkn' where id_prov = '$_GET[id]'");
      if($edit) {
        // Pesan untuk data yang berhasl diubah
        echo "<script>alert('Data produk berhasil diubah'); window.location.href='provinsi.php'</script>";
      } else {
        // Pesan untuk data yang gagal diubah
        echo "<script>alert('Data produk gagal diubah'); window.location.href='provinsi.php'</script>";
      }
    } else {
      $nama     = $_POST['nama'];
      $desc     = $_POST['desc'];
      $rmh      = $_POST['rmh'];
      $pakaian  = $_POST['pakaian'];
      $tari     = $_POST['tari'];
      $senjata  = $_POST['senjata'];
      $alat     = $_POST['alat'];
      $mkn      = $_POST['mkn'];
      $gambar   = $_FILES['gambar']['name'];
      move_uploaded_file($_FILES['gambar']['tmp_name'],"../upload/".$gambar);
      $query = mysqli_query($con, "INSERT INTO provinsi (nama_prov, isi_prov,gambar_prov, isi_rmh, isi_pakaian, isi_tari, isi_senjata, isi_alat, isi_mkn) VALUE ('$nama','$desc','$gambar','$rmh','$pakaian','$tari','$senjata','$alat','$mkn')");
      if($query) {
        // Pesan untuk data yang berhasl disimpan
        echo "<script>alert('Data produk berhasil ditambahkan'); window.location.href='provinsi.php'</script>";
      } else {
        // Pesan untuk data yang gagal disimpan
        echo "<script>alert('Data produk gagal ditambahkan'); window.location.href='provinsi.php'</script>";
      }
    }
  } 
  if( isset($_GET['hal']) ) {
    if($_GET['hal'] == "edit") {
      $query = mysqli_query($con, "SELECT * FROM provinsi where id_prov = ' $_GET[id]'");
      $data = mysqli_fetch_assoc($query);
      if($data) {
        $vnama      = $data['nama_prov'];
        $vdesc      = $data['isi_prov'];
        $vgambar    = $data['gambar_prov'];
        $vrmh       = $data['isi_rmh'];
        $vpakaian   = $data['isi_pakaian'];
        $vtari      = $data['isi_tari'];
        $vsenjata   = $data['isi_senjata'];
        $valat      = $data['isi_alat'];
        $vmkn       = $data['isi_mkn'];
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
      <link rel="stylesheet" type="text/css" href="assets/main.css">
    </head>
    <body>
      <h2 style="color: #520074; font-family: Calibri; font-style: italic; font-size: 35px;"><b>List Provinsi</b></h2>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data</li>
          <li class="breadcrumb-item active">
            <a href="provinsi.php">List Provinsi</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Create/Edit Data Provinsi</li>
        </ol>
      </nav>
      <div class="max-auto" style="width: 100%;">
        <!-- Untuk Input Data Provinsi -->
          <div class="card">
            <div class="card-header text-white bg-primary">
              <b>Create / Edit Data Provinsi</b>
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group row">
                      <label class="control-label col-sm-3">Nama</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Provinsi" value="<?=@$vnama?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-sm-3">Isi</label>
                      <div class="col-sm-8">
                        <textarea class="form-control" name="desc" placeholder="Masukkan Deskripsi Provinsi" required><?=@$vdesc?></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-sm-3">Gambar</label>
                      <div class="col-sm-8">
                        <input type="file" name="gambar" value="<?=@$vgambar?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group row">
                      <label class="control-label col-sm-4">Rumah Adat</label>
                      <div class="col-sm-8">
                        <textarea class="form-control" name="rmh" placeholder="Masukkan Deskripsi Rumah Adat"><?=@$vrmh?></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-sm-4">Pakaian Adat</label>
                      <div class="col-sm-8">
                        <textarea class="form-control" name="pakaian" placeholder="Masukkan Deskripsi Pakaian Adat"><?=@$vpakaian?></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-sm-4">Tarian Adat</label>
                      <div class="col-sm-8">
                        <textarea class="form-control" name="tari" placeholder="Masukkan Deskripsi Tarian Adat"><?=@$vtari?></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-sm-4">Senjata Tradisional</label>
                      <div class="col-sm-8">
                        <textarea class="form-control" name="senjata" placeholder="Masukkan Deskripsi Senjata Adat"><?=@$vsenjata
                        ?></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-sm-4">Alat Musik Tradisional</label>
                      <div class="col-sm-8">
                        <textarea class="form-control" name="alat" placeholder="Masukkan Deskripsi Alat Musik"><?=@$valat?></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-sm-4">Makanan Tradisional</label>
                      <div class="col-sm-8">
                        <textarea class="form-control" name="mkn" placeholder="Masukkan Deskripsi Makanan Tradisional"><?=@$vmkn?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <input type="submit" name="submit" value="Simpan Data" class="btn btn-outline-success btn-sm">
                    <input type="reset" name="reset" class="btn btn-outline-danger btn-sm" value="Besihkan" style="margin-left: 10px;"/>
                  </div>
                </div>
              </form>
            </div>
          </div>
        <!-- akhir Input Data Provinsi -->
      <script type="text/css" src="assets/js/bootstrap.min.js"></script>
    </body>
  </html>
<?php
  include "layout/footer.php";
?>