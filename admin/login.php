<?php
  include "../inc/koneksi.php";
  $err = '';
  if( isset($_POST['login']) && $_POST['login'] == "LOGIN") {
    $user = $_POST['user'];
    $pass = MD5($_POST['pass']);
    $query = mysqli_query($con, "SELECT * FROM admin where user_admin = '$user' AND pass_admin = '$pass'");
    $data = mysqli_fetch_assoc($query);
    if( mysqli_num_rows($query) > 0 ) {
      session_start();
      $_SESSION['id_admin'] = $data['id_admin'];
      $_SESSION['login'] = true;
      header('location:index.php');
    } else {
        $err = "Username atau Password Salah :(";
    }
  }
?>
<!DOCTYPE html>
<html leng="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <!-- Admin CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>e-BUDAYA | Login Admin</title>
    <link rel="shortcut icon" href="../assets/img/image.png">
  </head>
  <body style="background-image: url(../assets/img/batik.jpg);">
      <form class="form-signin" method="post" action="">
        <img class="mb-4" src="../assets/img/e-budaya.png" width="200px">
          <h1 class="h3 mb-3 font-weight-normal" style="text-align: center; font-family: 'Calibri';">Please sign in</h1>
          <label for="user" class="sr-only">Username</label>
          <input type="text" id="user_admin" class="form-control" placeholder="Username" name="user" required autofocus> <br>
          <label for="pass" class="sr-only">Password</label>
          <input type="password" id="pass_admin" class="form-control" placeholder="Password" name="pass" required> <br>
          <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="LOGIN">Sign in</button>
          <font color="red"><?=$err;?></font>
          <p class="mt-5 mb-3 text-muted" style="text-align: center;">e-BUDAYA &copy; 2021</p>
      </form>
      <!-- JavaScript -->
      <script src="assets/js/boostrap.js"></script>
  </body>
</html>