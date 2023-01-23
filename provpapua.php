<?php
  require "inc/koneksi.php";
  $query = mysqli_query($con, "SELECT * FROM provinsi where id_prov = '3'");
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
      <li class="breadcrumb-item">Provinsi::WIT - Provinsi Papua</li>
    </ol>
  </nav>
    <!-- Judul Provinsi Papua -->
      <div class="provpapua">
        <div class="container">
          <h2 class="display-4"><?=$data['nama_prov'];?></h2>
          <div class="row justify-content-center">
            <img src="upload/<?=$data['gambar_prov'];?>" alt="papua">
          </div>     
        </div>
      </div>
	  <!-- akhir Judul Provinsi Papua -->
		<!-- Container -->
			<div class="container">
				<!-- Deskripsi Provinsi Papua -->
					<div class="row justify-content-center">
						<div class="col-lg-11 desc-papua">
							<p><?=$data['isi_prov'];?></p>
						</div>
					</div>
				<!-- akhir Deskripsi Papua -->
				<!-- Rumah Adat Papua -->
					<div class="row rmhpapua">
						<div class="col-lg-6">
							<h5>Rumah Adat</h5>
							<img src="assets/img/rumah-adat-papua-honai.jpg" alt="Rumah Adat Papua" class="img-fluid">
						</div>
						<div class="col-lg-6">
							<p><?=$data['isi_rmh'];?></p>
						</div>
					</div>
				<!-- akhir Rumah Adat Papua -->
				<!-- Pakaian Adat Papua -->
					<div class="row pakaianpapua">
						<div class="col-lg-6">
							<h5>Pakaian Adat</h5>
							<img src="assets/img/Rok-Rumbai.png" alt="Pakaian Adat Papua" class="img-fluid">
						</div>
						<div class="col-lg-6">
							<p><?=$data['isi_pakaian'];?></p>
						</div>
					</div>
				<!-- akhir Pakaian Adat Papua -->
				<!-- Tari Tradisional Papua -->
					<div class="row taripapua">
						<div class="col-lg-6">
							<h5>Tari Tradisional</h5>
							<img src="assets/img/Tarian-Sajojo.jpg" alt="Tari Papua" class="img-fluid">
						</div>
						<div class="col-lg-6">
							<p><?=$data['isi_tari'];?></p>
						</div>
					</div>
				<!-- akhir Tari Tradisional Papua -->
				<!-- Senjata Tradisional Papua -->
					<div class="row senjatapapua">
						<div class="col-lg-6">
							<h5>Senjata Tradisional</h5>
							<img src="assets/img/senjata-tradisional-papua-pisau-belati.jpg" alt="Senjata Papua" class="img-fluid">
						</div>
						<div class="col-lg-6">
							<p><?=$data['isi_senjata'];?></p>
						</div>
					</div>
				<!-- akhir Senjata Tradisional Papua -->
				<!-- Alat Musik Tradisional Papua -->
					<div class="row alatmskpapua">
						<div class="col-lg-6">
							<h5>Alat Musik Tradisional</h5>
							<img src="assets/img/tifa.jpg" alt="Alatmusikpapua" class="img-fluid">
						</div>
						<div class="col-lg-6">
							<p><?=$data['isi_alat'];?></p>
						</div>
					</div>
				<!-- akhir Alat Musik Tradisional Papua -->
				<!-- Makanan Tradisional Papua -->
					<div class="row mknpapua">
						<div class="col-lg-6">
							<h5>Makanan Tradisional</h5>
							<img src="assets/img/papeda.jpg" alt="Papeda" class="img-fluid">
						</div>
						<div class="col-lg-6">
							<p><?=$data['isi_mkn'];?></p>
						</div>
					</div>
				<!-- akhir Makanan Tradisional Papua -->
			</div>
		<!-- akhir Container -->
<?php
  include "footer.php";
?>