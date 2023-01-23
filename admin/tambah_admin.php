<?php
  include "layout/header.php";
  if(!$_SESSION['login']) {
    header('location:login.php');
  }
  if( isset($_POST['submit']) ) {
    if($_GET['hal'] == "edit") {
       $cond = "";
       $nama = $_POST['nama'];
       $user = $_POST['user'];
       $cond .= "nama_admin = '$nama', user_admin = '$user'";
      if( !empty($_POST['pass']) ) {
          $pass = MD5($_POST['pass']);
          $cond .= ",pass_admin = '$pass'";
          $edit = mysqli_query($con, "UPDATE admin set $cond where id_admin = ' $_GET[id]'");
          if($edit) {   
            // Pesan untuk data yang berhasl diubah
            echo "<script>alert('Data produk berhasil diubah'); window.location.href='admin.php'</script>";
        } else {
            // Pesan untuk data yang gagal diubah
            echo "<script>alert('Data produk gagal diubah'); window.location.href='admin.php'</script>";
        }
      } else {
          $nama = $_POST['nama'];
          $user = $_POST['user'];
          $pass = MD5($_POST['pass']);
          $query = mysqli_query($con, "INSERT INTO admin (nama_admin, user_admin,pass_admin) VALUE ('$nama','$user','$pass')");
          if($query) {
            // Pesan untuk data yang berhasl disimpan
            echo "<script>alert('Data produk berhasil ditambahkan'); window.location.href='admin.php'</script>";
          } else {
            // Pesan untuk data yang gagal disimpan
            echo "<script>alert('Data produk gagal ditambahkan'); window.location.href='admin.php'</script>";
          }
      }
    }
  }
  if( isset($_GET['hal']) ) {
    if($_GET['hal'] == "edit") {
      $query = mysqli_query($con, "SELECT * FROM admin where id_admin = ' $_GET[id]'");
      $data = mysqli_fetch_assoc($query);
      if($data) {
        $vnama  = $data['nama_admin'];
        $vuser   = $data['user_admin'];
        $vpass   = $data['pass_admin'];
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
      <h2 style="color: #520074;margin: 10px 5px; font-family: Calibri; font-style: italic; font-size: 35px;"><b>List Admin</b></h2>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data</li>
          <li class="breadcrumb-item active">
            <a href="admin.php">List Admin</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Create/Edit Data Admin</li>
        </ol>
      </nav>
      <div class="mx-auto" style="width: 100%;">
        <!-- Untuk Input Data Admin -->
          <div class="card">
            <div class="card-header bg-primary text-white">
              <b>Create / Edit Data Admin</b>
            </div>
            <div class="card-body" style="padding: 20px;">
              <form action="" method="POST">
                <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda" style="margin-left: -15px;" value="<?=@$vnama?>">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" name="user" class="form-control" placeholder="Masukkan Username Anda" style="margin-left: -15px;" value="<?=@$vuser?>">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-sm-8">
                    <label>Password</label>
                    <input type="password" name="pass" class="mx-sm-10" aria-describedby="passwordHelpInline" style="margin-left: 98px;" value="<?=@$vpass?>">
                    <small id="passwordHelpInline" class="text-muted">
                      Must be 8-20 characters long.
                    </small>
                  </div>
                </div>
                <div class="col-6" style="margin-top: 10px;">
                  <input type="submit" name="submit" value="Simpan Data" class="btn btn-outline-success btn-sm" style="margin-left: -15px;"/>
                  <input type="reset" name="reset" class="btn btn-outline-danger btn-sm" value="Besihkan" style="margin-left: 10px;"/>
                </div>
              </form>
            </div>
          </div>
        <!-- akhir Input Data Admin -->
      </div>
      <script type="text/css" src="assets/js/bootstrap.min.js"></script>
    </body>   
  </html>  
<?php
  include "layout/footer.php";
?>