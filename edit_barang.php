<!DOCTYPE html>
<html>
<head>
  	<title>Edit Barang</title>
  	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container-fluid">
      <div class="jumbotron">
      <h1>Edit Barang</h1>
       <?php 
        $connect = mysqli_connect('localhost', 'root', '', 'sepatu_online');
        $kode_barang = $_GET['kode_barang'];
        $query = mysqli_query($connect, "SELECT *FROM barang WHERE kode_barang='$kode_barang'");
        $row = mysqli_fetch_array($query);
        ?>
      <form action="edit_proses_barang.php?kode_barang=<?=$row['kode_barang']?>" method="POST">
          <label>Nama</label><br>
            <input class="form-control col-sm-3" type="text" name="nama_barang" value="<?= $row['nama_barang'] ?>" >
          <!-- <label>Stok</label><br>
            <input class="form-control col-sm-3" type="text" name="stok" value="<?= $row['stok'] ?>" > -->
            <label>Harga</label><br>
            <input class="form-control col-sm-3" type="text" name="harga" value="<?= $row['harga'] ?>" >
            <label>Ukuran</label><br>
            <input class="form-control col-sm-3" type="text" name="ukuran" value="<?= $row['ukuran'] ?>" >
            <label>Merk</label><br>
            <input class="form-control col-sm-3" type="text" name="merk" value="<?= $row['merk'] ?>" >
            <label>Model</label><br>
            <input class="form-control col-sm-3" type="text" name="model" value="<?= $row['model'] ?>" >
            <label>Diskon</label><br>
            <input class="form-control col-sm-3" type="text" name="diskon" value="<?= $row['diskon'] ?>" >
             <label>Warna</label><br>
            <input class="form-control col-sm-3" type="text" name="warna" value="<?= $row['warna'] ?>" >

          <button type="submit" class="btn btn-primary">save </button>
          <a href="pemasok.php" class="btn btn-danger">Kembali</a>
      </form>
      </div>
  </div>
</body>
</html>