<!DOCTYPE html>
<html>
<head>
  	<title>Edit Pemasok</title>
  	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container-fluid">
      <div class="jumbotron">
      <h1>Edit Pemasok</h1>
       <?php 
        $connect = mysqli_connect('localhost', 'root', '', 'sepatu_online');
        $id_pemasok = $_GET['id_pemasok'];
        $query = mysqli_query($connect, "SELECT *FROM pemasok WHERE id_pemasok='$id_pemasok'");
        $row = mysqli_fetch_array($query);
        ?>
      <form action="edit_proses.php?id_pemasok=<?=$row['id_pemasok']?>" method="POST">
          <label>Nama</label><br>
            <input class="form-control col-sm-3" type="text" name="nama" value="<?= $row['nama'] ?>" >
          <label>No Telepon</label><br>
            <input class="form-control col-sm-3" type="text" name="no_telepon" value="<?= $row['no_telepon'] ?>" >

          <button type="submit" class="btn btn-primary">save </button>
          <a href="pemasok.php" class="btn btn-danger">Kembali</a>
      </form>
      </div>
  </div>
</body>
</html>