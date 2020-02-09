<?php
   session_start();
   $connect = mysqli_connect('localhost', 'root', '', 'sepatu_online');
   $kode_barang = $_GET['kode_barang'];
   $nama_barang = $_POST['nama_barang'];
   // $stok = $_POST['stok'];
   $harga = $_POST['harga'];
   $ukuran = $_POST['ukuran'];
   $merk = $_POST['merk'];
   $model = $_POST['model'];
   $diskon = $_POST['diskon'];
   $warna = $_POST['warna'];
   $id_pemasok = $_SESSION['id_pemasok'];

   $query = mysqli_query($connect, "UPDATE barang SET id_pemasok='$id_pemasok', nama_barang='$nama_barang', harga='$harga', ukuran='$ukuran', merk='$merk', model='$model', diskon='$diskon', warna='$warna' WHERE kode_barang='$kode_barang'");
    
   if ($query) {
       header('Location: tampil_barang.php');
   } else {
       header('Location: edit.php');
   }
?>