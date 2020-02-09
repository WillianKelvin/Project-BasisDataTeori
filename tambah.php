<!DOCTYPE html>
<html>
<head>
  <title>Tambah Pemasok</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">

          <div class="jumbotron">
             <a href="pemasok.php">
               <button class="btn btn-primary">Lihat Pemasok</button>
            </a>
          <h1>Tambah Pemasok</h1>
          <form action="tambah_proses.php" method="POST" enctype="multipart/form-data">
            <label>Id Pemasok</label><br>
            <input class="form-control col-sm-3" type="text" name="id_pemasok" placeholder="id_pemasok" >
            <label>Nama</label><br>
            <input class="form-control col-sm-3" type="text" name="nama" placeholder="nama" >
            <label>No Telepon</label><br>
            <input class="form-control col-sm-3" type="text" name="no_telepon" placeholder="no_telepon" > 
            <label>Password</label>
            <input class="form-control col-sm-3" type="password" name="password" placeholder="password">
            <input type="submit" class="btn btn-primary" value="save">
            <a href="login_admin.php" class="btn btn-danger">Kembali</a>
          </form>
          </div>

        </div>
</body>
</html>