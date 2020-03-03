<?php
    // Connection
    require 'koneksi.php';

    // Terima data
    
    $id_petugas = $_POST['id_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_petugas = $_POST['nama_petugas'];
    $level = $_POST['level'];

    // var_dump($id_spp);

    mysqli_query($koneksi, "insert into petugas values('$id_petugas', '$username', '$password', '$nama_petugas', '$level')");

    // Redirect
    header('location:index.php');
?>