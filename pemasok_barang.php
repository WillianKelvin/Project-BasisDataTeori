<!DOCTYPE html>
<html>
<head>
  <title>Tambah barang</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">

          <div class="jumbotron">
            <a href="tampil_barang.php">
               <button class="btn btn-primary">Lihat Barang</button>
            </a>
          <h1>Tambah Barang</h1>
          <form action="tambah_proses_barang.php" method="POST" enctype="multipart/form-data">
            <label>Nama</label><br>
            <input class="form-control col-sm-3" type="text" name="nama" placeholder="nama" >
  <!--           <label>Stok</label><br>
            <input class="form-control col-sm-3" type="text" name="stok" placeholder="Stok" >  -->
             <label>Harga</label><br>
            <input class="form-control col-sm-3" type="text" name="harga" placeholder="Harga" >
             <label>Ukuran</label><br>
            <input class="form-control col-sm-3" type="text" name="ukuran" placeholder="ukuran" >
             <label>Merk</label><br>
            <input class="form-control col-sm-3" type="text" name="merk" placeholder="merk" >
            <label>Model</label><br>
            <input class="form-control col-sm-3" type="text" name="model" placeholder="model" >
             <label>Diskon</label><br>
            <input class="form-control col-sm-3" type="text" name="diskon" placeholder="diskon" >
             <label>warna</label><br>
            <input class="form-control col-sm-3" type="text" name="warna" placeholder="Warna" >
             <label>gambar</label><br>
            <input type="file" name="gambar" >
            <br>
            <input type="submit" class="btn btn-primary" value="save">
            <a href="login_pemasok.php" class="btn btn-danger">Kembali</a>
          </form>
          </div>

        </div>
</body>
</html>