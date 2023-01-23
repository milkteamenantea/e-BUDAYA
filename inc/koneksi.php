<?php
    $host = "localhost"; // Nama server pada PHP
    $user = "root"; // User pada database
    $pass = ""; // Password pada database
    $name = "budayaindo"; // Database di phpMyAdmin
    $con  = mysqli_connect ($host, $user, $pass) or die ("Koneksi Tidak Terhubung :(");
    mysqli_select_db ($con,$name) or die ("DATABASE TIDAK DITEMUKAN");
?>