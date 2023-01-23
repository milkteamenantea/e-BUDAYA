<?php
  include "layout/header.php";
  $id = $_GET['id'];
  if( isset($_POST['edit']) && $_POST['edit'] == "Simpan Data" ) {
    $judul    = $_POST['judul'];
    $isi      = $_POST['isi'];
    $query = mysqli_query($con, "UPDATE pages set judul_pages = '$judul', isi_pages = '$isi' where id_pages = '$id'");
    if($query) {
     echo "<script>if(alert('Data Berhasil Disimpan...')){window.location.href='page_tentang.php';}</script>";
    }
  }
  $query = mysqli_query($con, "SELECT * FROM pages where id_pages = '$id'");
  $data = mysqli_fetch_assoc($query);
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
      <h2 style="color: #520074; margin: 10px 5px; font-family: Calibri; font-style: italic; font-size: 35px;"><b>Tentang</b></h2>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Pages</li>
          <li class="breadcrumb-item active">Page::Tentang</li>
        </ol>
      </nav>
      <div class="max-auto" style="width: 100%;">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <b>Create / Edit Data Tentang</b>
            </div>
            <div class="card-body" style="padding: 20px;">
              <form action="" method="POST">
                  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                      <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" value="<?=$data['judul_pages'];?>">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Isi</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="isi" rows="2" placeholder="Masukkan Isi Tentang"><?=$data['isi_pages'];?></textarea>
                    </div>
                  </div>
                  <div class="col-10">
                    <input type="submit" name="edit" value="Simpan Data" class="btn btn-success btn-sm" style="margin-left: -15px;">
                  </div>
              </form>
            </div>
          </div>
      </div>
      <!-- JavaScript -->
      <script src="assets/js/boostrap.js"></script>
    </body>
  </html>
<?php
  include "layout/footer.php";
?>
