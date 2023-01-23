<?php
  require "inc/koneksi.php";
  $query = mysqli_query($con, "SELECT * FROM provinsi where id_prov = '1'");
  $data = mysqli_fetch_assoc($query);
?>
<?php
  include "header.php";
?>
  <nav aria-label="breadcrumb" style="margin-top: 30px; margin-left: 100px; width: 84%;">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Beranda</a>
      </li>
      <li class="breadcrumb-item">
        <a href="provinsi.php">Provinsi</a>
      </li>
      <li class="breadcrumb-item">Provinsi::WIB - Provinsi Jawa Barat</li>
    </ol>
  </nav>
    <!-- Judul Provinsi Jabar -->
      <div class="provjabar">
        <div class="container">
          <h2 class="display-4" style="margin-top: 10px;"><?=$data['nama_prov'];?></h2>
          <div class="row justify-content-center">
            <img src="upload/<?=$data['gambar_prov'];?>" alt="jabar">
          </div>     
        </div>
      </div>
    <!-- akhir Judul Provinsi Jabar -->
    <!-- Container -->
      <div class="container">
        <!-- Deskripsi Provinsi Jabar -->
          <div class="row justify-content-center">
            <div class="col-lg-11 desc-jabar">
              <p><?=$data['isi_prov'];?></p>
            </div>
          </div>
        <!-- akhir Deskripsi Jabar -->
        <!-- Rumah Adat Jabar -->
          <div class="row rmhjabar">
            <div class="col-lg-6">
              <h5>Rumah Adat</h5>
              <img src="assets/img/keraton-kasepuhan.jpg" alt="Rumah Adat Jabar" class="img-fluid">
            </div>
            <div class="col-lg-6">
              <p><?=$data['isi_rmh'];?></p>
            </div>
          </div>
        <!-- akhir Rumah Adat Jabar -->
        <!-- Pakaian Adat Jabar -->
          <div class="row pakaianjabar">
            <div class="col-lg-6">
              <h5>Pakaian Adat</h5>
              <img src="assets/img/pakaian.jpg" alt="Pakaian Adat Jabar" class="img-fluid">
            </div>
            <div class="col-lg-6">
              <p><?=$data['isi_pakaian'];?></p>
            </div>
          </div>
        <!-- akhir Pakaian Adat Jabar -->
        <!-- Tari Tradisional Jabar -->
          <div class="row tarijabar">
            <div class="col-lg-6">
              <h5>Tarian Tradisional</h5>
              <img src="assets/img/merak.jpeg" alt="Tari Jabar" class="img-fluid">
            </div>
            <div class="col-lg-6">
              <p><?=$data['isi_tari'];?></p>
            </div>
          </div>
        <!-- akhir Tari Tradisional Jabar -->
        <!-- Senjata Tradisional Jabar -->
          <div class="row senjatajabar">
            <div class="col-lg-6">
              <h5>Senjata Tradisional</h5>
              <img src="assets/img/senjata jabar.jpg" alt="Senjata Jabar" class="img-fluid">
            </div>
            <div class="col-lg-6">
              <p><?=$data['isi_senjata'];?></p>
            </div>
          </div>
        <!-- akhir Senjata Tradisional Jabar -->
        <!-- Alat Musik Tradisional Jabar -->
          <div class="row alatmskjabar">
            <div class="col-lg-6">
              <h5>Alat Musik Tradisional</h5>
              <img src="assets/img/alat-musik-angklung.jpg" alt="Alatmusik Jabar" class="img-fluid">
            </div>
            <div class="col-lg-6">
              <p><?=$data['isi_alat'];?></p>
            </div>
          </div>
        <!-- akhir Alat Musik Tradisional Jabar -->
        <!-- Makanan Tradisional Jabar -->
          <div class="row mknjabar">
            <div class="col-lg-6">
              <h5>Makanan Tradisional</h5>
              <img src="assets/img/karedok.jpg" alt="Karedok" class="img-fluid">
            </div>
            <div class="col-lg-6">
              <p><?=$data['isi_mkn'];?></p>
            </div>
          </div>
        <!-- akhir Makanan Tradisional Jabar -->
      </div>
    <!-- akhir Container -->
<?php
  include "footer.php";
?>