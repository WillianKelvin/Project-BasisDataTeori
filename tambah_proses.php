<?php
$connect = mysqli_connect('localhost', 'root', '', 'sepatu_online');
$id_pemasok = $_POST['id_pemasok'];
$nama = $_POST['nama'];
$no_telepon = $_POST['no_telepon'];
$query = mysqli_query($connect,"INSERT INTO pemasok VALUES ('$id_pemasok','$nama','$no_telepon')");
if ($query) {
  header('location:pemasok.php');
}
?> 
