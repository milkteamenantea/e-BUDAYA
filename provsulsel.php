<?php
  require "inc/koneksi.php";
  $query = mysqli_query($con, "SELECT * FROM provinsi where id_prov = '2'");
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
      <li class="breadcrumb-item">Provinsi::WIB - Provinsi Sulawesi Selatan</li>
    </ol>
  </nav>  
    <!-- Judul Provinsi Sulsel -->
      <div class="provsulsel">
        <div class="container">
          <h2 class="display-4" style="margin-top: 10px;"><?=$data['nama_prov'];?></h2>
          <div class="row justify-content-center">
            <img src="upload/<?=$data['gambar_prov'];?>" alt="jabar">
          </div>     
        </div>
      </div>
    <!-- akhir Judul Provinsi Sulsel -->
    <!-- Container -->
      <div class="container">
        <!-- Deskripsi Provinsi Sulsel -->
          <div class="row justify-content-center">
            <div class="col-lg-11 desc-sulsel">
              <p><?=$data['isi_prov'];?></p>
            </div>
          </div>
        <!-- akhir Deskripsi Sulsel -->
        <!-- Rumah Adat Sulsel -->
          <div class="row rmhsulsel">
            <div class="col-lg-6">
              <h5>Rumah Adat</h5>
              <img src="assets/img/Kebudayaan-Sulawesi-Selatan.jpg" alt="Rumah Adat Sulsel" class="img-fluid">
            </div>
            <div class="col-lg-6">
              <p><?=$data['isi_rmh'];?></p>
            </div>
          </div>
        <!-- akhir Rumah Adat Sulsel -->
        <!-- Pakaian Adat Sulsel -->
          <div class="row pakaiansulsel">
            <div class="col-lg-6">
              <h5>Pakaian Adat</h5>
              <img src="assets/img/Pakaian-Adat-Sulawesi-Selatan.jpg" alt="Pakaian Adat Sulsel" class="img-fluid">
            </div>
            <div class="col-lg-6">
              <p><?=$data['isi_pakaian'];?></p>
            </div>
          </div>
        <!-- akhir Pakaian Adat Sulsel -->
        <!-- Tari Tradisional Sulsel -->
          <div class="row tarisulsel">
            <div class="col-lg-6">
              <h5>Tari Tradisional</h5>
              <img src="assets/img/Informasi-mengenai-Tari-Kipas-Pakarena-Sulawesi-Selatan-dan-Propertinya.jpg" alt="Tari Sulsel" class="img-fluid">
            </div>
            <div class="col-lg-6">
              <p><?=$data['isi_tari'];?></p>
            </div>
          </div>
        <!-- akhir Tari Tradisional Sulsel -->
        <!-- Senjata Tradisional Sulsel -->
          <div class="row senjatasulsel">
            <div class="col-lg-6">
              <h5>Senjata Tradisional</h5>
              <img src="assets/img/Senjata Tradisional Sulawesi Selatan - Badik Raja.jpg" alt="Senjata Sulsel" class="img-fluid">
            </div>
            <div class="col-lg-6">
              <p><?=$data['isi_senjata'];?></p>
            </div>
          </div>
        <!-- akhir Senjata Tradisional Sulsel -->
        <!-- Alat Musik Tradisional Sulsel -->
          <div class="row alatmsksulsel">
            <div class="col-lg-6">
              <h5>Alat Musik Tradisional</h5>
              <img src="assets/img/Kacaping.jpg" alt="Alatmusik Sulsel" class="img-fluid">
            </div>
            <div class="col-lg-6">
              <p><?=$data['isi_alat'];?></p>
            </div>
          </div>
        <!-- akhir Alat Musik Tradisional Sulselr -->
        <!-- Makanan Tradisional Sulsel -->
          <div class="row mknsulsel">
            <div class="col-lg-6">
              <h5>Makanan Tradisional</h5>
              <img src="assets/img/sop konro.jpg" alt="Sop konro" class="img-fluid">
            </div>
            <div class="col-lg-6">
              <p><?=$data['isi_mkn'];?></p>
            </div>
          </div>
        <!-- akhir Makanan Tradisional Sulsel -->
      </div>
    <!-- akhir Container -->
<?php
  include "footer.php";
?>