<?php
    $id_petugas = $_POST['id_petugas'];
require 'koneksi.php';
    $id_petugas = $_POST['id_petugas'];
    $username = $_POST['username'];
    $nama_petugas = $_POST['nama_petugas'];
    $level = $_POST['level'];

    mysqli_query($koneksi, "UPDATE `petugas` SET `id_petugas` = '$id_petugas', `username` = '$username', `nama_petugas` = '$nama_petugas',  `level` = '$level' WHERE `petugas`.`id_petugas` = '$id_petugas'");

    // Redirect

    header('location:index.php');
?>