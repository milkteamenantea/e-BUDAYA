<?php
  include "header.php";
?>
<?php
  require "inc/koneksi.php";
  $query = mysqli_query($con, "SELECT * FROM pages where id_pages = '2'");
  $data = mysqli_fetch_assoc($query);
?>
    <!-- Judul Provinsi -->
      <div class="provindo">
        <div class="container">
          <h2 class="display-4" style="margin-top: 50px;"><?=$data['judul_pages'];?></h2>
          <div class="row justify-content-center">
            <img src="assets/img/zonawaktu.png">
          </div>     
        </div>
      </div>
    <!-- akhir Judul Provinsi -->
    <!-- Container -->
      <div class="container">
        <!-- Deskripsi Provinsi -->
          <div class="row justify-content-center">
            <div class="col-lg-11 desc-prov">
              <p><?=$data['isi_pages'];?></p>
            </div>
          </div>
        <!-- akhir Deskripsi Provinsi -->
        <!-- Zona Waktu Pertama -->
          <div class="row justify-content-start">
            <div class="col-lg-12 zonawaktu1">
              <h5>Provinsi Yang Masuk Zona Waktu Indonesia Barat (WIB)</h5>
              <a href="#"><img src="assets/img/Logo Provinsi Aceh.png" alt="Prov aceh" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Sumatera Utara.png" alt="Prov sumut" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Sumatera Barat.png" alt="Prov sumbar" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Riau.png" alt="Prov riau" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Kepulauan Riau (Kepri).png" alt="Prov kepri" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Jambi.png" alt="Prov jambi" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Sumatera Selatan.png" alt="Prov sumsel" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Lampung.png" alt="Prov lampung" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Kepulauan Bangka Belitung.png" alt="Prov kepbang" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Bengkulu.png" alt="Prov bengkulu" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi DKI Jakarta.png" alt="Prov jkt" class="img-fluid btn"></a>
              <a href="provjabar.php"><img src="assets/img/Logo Provinsi Jawa Barat.png" alt="Prov jabar" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Banten.png" alt="Prov banten" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Jawa Tengah.png" alt="Prov jateng" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Yogyakarta.png" alt="Prov yogya" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Jawa Timur.png" alt="Prov jatim" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Kalimantan Barat.png" alt="Prov kalbar" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Kalimantan Tengah.png" alt="Prov kalteng" class="img-fluid btn"></a>
            </div>
          </div> 
        <!-- akhir Zona Waktu Pertama -->
        <!-- Zona Waktu Kedua -->
          <div class="row justify-content-start">
            <div class="col-lg-12 zonawaktu2">
              <h5>Provinsi Yang Masuk Zona Waktu Indonesia Tengah (WITA)</h5>
              <a href="#"><img src="assets/img/Logo Provinsi Kalimantan Utara.png" alt="Prov kalut" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Kalimantan Timur.png" alt="Prov kaltim" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Kalimantan Selatan.png" alt="Prov kalsel" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Bali.png" alt="Prov bali" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Nusa Tenggara Barat.png" alt="Prov ntb" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Sulawesi Barat.png" alt="Prov sulbar" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Sulawesi Tengah.png" alt="Prov sulteng" class="img-fluid btn"></a>
              <a href="provsulsel.php"><img src="assets/img/Logo Provinsi Sulawesi Selatan.png" alt="Prov sulsel" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Sulawesi Tenggara.png" alt="Prov sultenggara" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Sulawesi Utara.png" alt="Prov sulut" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Gorontalo.png" alt="Prov gorontalo" class="img-fluid btn"></a>
            </div>
          </div>
        <!-- akhir Zona Waktu Kedua -->
        <!-- Zona Waktu Ketiga -->
          <div class="row justify-content-start">
            <div class="col-lg-12 zonawaktu3">
              <h5>Provinsi Yang Masuk Zona Waktu Indonesia Timur (WIT)</h5>
              <a href="#"><img src="assets/img/Logo Provinsi Maluku.png" alt="Prov maluku" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Maluku Utara.png" alt="Prov malut" class="img-fluid btn"></a>
              <a href="provpapua.php"><img src="assets/img/Logo Provinsi Papua.png" alt="Prov papua" class="img-fluid btn"></a>
              <a href="#"><img src="assets/img/Logo Provinsi Papua Barat.png" alt="Prov pabar" class="img-fluid btn"></a>
            </div>
          </div>
        <!-- akhir Zona Waktu Ketiga -->
      </div>
    <!-- akhir Container -->
<?php
  include "footer.php";
?>