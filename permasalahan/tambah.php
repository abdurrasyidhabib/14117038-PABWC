<?php
require 'functions.php';
if (isset($_POST['submit'])) {
  $data = $_POST;
  if (tambah($data) > 0) {
    echo "
      <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'tampil.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('data gagal ditambahkan');
        document.location.href = 'tampil.php';
      </script>
    ";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <title>form isi data</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-8 m-auto">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" class="form-control" placeholder="nim" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="nama" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="alamat" name="alamat" id="alamat" class="form-control" placeholder="alamat" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <label for="">Prodi</label>
            <select multiple class="form-control" name="prodi" id="">
              <option value="1">Teknik Informatika</option>
              <option value="2">Desain Komunikasi Visual</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>