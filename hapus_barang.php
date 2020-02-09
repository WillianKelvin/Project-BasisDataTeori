<?php
    $connect = mysqli_connect('localhost', 'root', '', 'sepatu_online');

    $kode_barang = $_GET['kode_barang'];

    $query = mysqli_query($connect, "DELETE FROM barang WHERE kode_barang='$kode_barang'");

    if ($query) {
        header('Location: tampil_barang.php');
    }
?>