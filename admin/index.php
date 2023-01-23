<?php
  include "layout/header.php";
  if( $_SESSION['login'] = true) {
    header('location:login.php');
  }
?>
  <!-- Page Heading -->
  <h1 style="color: #520074; font-family: 'Cooper'; text-align: center; margin-top: 40px;">Selamat Datang di Website Admin e-BUDAYA</h1>
<?php
   include "layout/footer.php";
?>