<?php
  include "header.php";
?>
<?php
  require "inc/koneksi.php";
  $query = mysqli_query($con, "SELECT * FROM pages where id_pages ='3'");
  $data = mysqli_fetch_assoc($query);
?>
  <div class="container">
    <div class="row tentang" style="margin-top: 70px;">
      <div class="col-md-12">
        <h2 style="color: blueviolet; font-family: arial rounded mt; font-weight: bold; font-size: 42px; text-align: center;"><?=$data['judul_pages'];?></h2>
        <br><br>
        <p style="color: darkblue; font-family: cursive; font-size: 18px; text-align: justify; text-align: justify; margin-bottom: 148px"><?=$data['isi_pages'];?></p>
      </div>
    </div>
  </div>
<?php
  include "footer.php";
?>
