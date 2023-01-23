<?php
  require "inc/koneksi.php";
  $id = $_GET ['id'];
  $query = mysqli_query($con, "SELECT * FROM artikel where id_artikel = '$id'");
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
      <li class="breadcrumb-item">Detail</li>
    </ol>
  </nav>
  <section>
    <div class="container">
      <div class="detail">
          <div class="title" style="margin-top: 10px;"><?=$data['judul_artikel'];?></div>
          <img class="thumbnail" src="upload/<?=$data['gambar_artikel'];?>">
          <div class="desc">
            <p><?=$data['isi_artikel'];?></p>
          </div>
      </div>
    </div>
  </section>
<?php
  include "footer.php";
?>