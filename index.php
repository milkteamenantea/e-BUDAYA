<?php
  require "inc/koneksi.php";
  $query = mysqli_query($con, "SELECT * FROM artikel order by id_artikel DESC");
  $data = mysqli_fetch_assoc($query);
?>
<?php
  include "header.php";
?>
    <section>
      <div class="container">
        <!-- Slides -->
          <div class="slides" style="margin-bottom: 90px;">
            <div class="item"><img class="full-width" src="assets/img/indo1.png" alt="betawi"></div>
            <div class="item"><img class="full-width" src="assets/img/indo2.jpeg" alt="rumahadat"></div>
            <div class="item"><img class="full-width" src="assets/img/indo3.jpg" alt="tarikecak"></div>
          </div>
        <!-- akhir Slides -->
        <!-- Artikel -->
          <div class="row artikel">
            <div class="col-md-14">
              <?php
                do {
              ?>
                <div class="box-news">
                  <img class="cover" src="upload/<?=$data['gambar_artikel'];?>">
                  <div class="description">
                    <div class="title">
                      <a href="detail.php?id=<?=$data['id_artikel'];?>"><?=$data['judul_artikel'];?></a>
                    </div>
                  </div>
                  <a class = "btn btn-primary tombol" href="detail.php?id=<?=$data['id_artikel'];?>">Lihat</a>
                </div>
              <?php
                } while ( $data = mysqli_fetch_assoc($query) );
              ?>
            </div>
          </div>
        <!-- akhir Artikel -->
      </div>
    </section>
    <!-- Quotes -->
      <section class="quote">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h4>❝  Kebudayaan tidak dapat dipertahankan saja, kita harus berusaha merobah dan memajukan. Oleh itu karena kebudayaan sebagai kultur, sebagai barang yang tumbuh, dapat hilang dan bisa maju.  ❞ </h4>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6 justify-content-center d-flex">
            <figure class="figure">
              <img src="assets/img/bung-hatta.jpg" class="figure-img img-fluid rounded-circle" alt="bunghatta">
              <figcaption class="figure-caption">
                <h5>- Mohammad Hatta -</h5>
                <p>Wakil Presiden Indonesia (1949-1950)</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </section>
    <!-- akhir Quotes -->
<?php
  include "footer.php";
?>