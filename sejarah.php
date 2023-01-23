<?php
  require "inc/koneksi.php";
  $query = mysqli_query($con, "SELECT * FROM pages where id_pages = '1'");
  $data = mysqli_fetch_assoc($query);
?>
<?php
  include "header.php";
?>
    <!-- Judul Sejarah -->
      <div class="sejarahindo">
        <div class="container">
          <h2 class="display-4"><?=$data['judul_pages'];?></h2>
          <div class="row justify-content-center">
            <img src="assets/img/pawai_budaya.jpg">
          </div>     
        </div>
      </div>
    <!-- akhir Judul Sejarah -->
    <!-- Deskripsi Sejarah -->
      <div class="row desc-sejarah">
        <div class="col-lg-10">
          <p><?=$data['isi_pages'];?></p>
        </div>
      </div>
    <!-- akhir Deskripsi Sejarah -->
<?php
  include "footer.php";
?>