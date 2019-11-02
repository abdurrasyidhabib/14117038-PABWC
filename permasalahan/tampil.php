<?php
require 'functions.php';
$mahasiswa = query("SELECT nim, nama, alamat, Prodi from mahasiswa natural join jurusan WHERE mahasiswa.ID_jur=jurusan.ID_jur");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>form isi data</title>
</head>

<body>
  <div class="container">
    <h3 class="text-center mb-4">DATA MAHASISWA PEMROGRAMAN WEB 2019</h3>
    <a name="" id="" class="btn btn-primary" href="tambah.php" role="button">tambah data</a>
    <form action="hasilcari.php" method="post">
      <input type="text" class="form-control col-3 d-inline" width="50%" name="nim" id="" aria-describedby="helpId" placeholder="cari data berdasarkan nim . . .">
      <button type="submit" class="btn btn-success" name="cari">cari</button>
    </form>
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Prodi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($mahasiswa as $mhs) :

          ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= $mhs['nim'] ?></td>
            <td><?= $mhs['nama'] ?></td>
            <td><?= $mhs['alamat'] ?></td>
            <td><?= $mhs['Prodi'] ?></td>
            <td>
              <span class="badge badge-warning"><a href="ubah.php?nim=<?= $mhs['nim']; ?>">ubah</a></span>
              <span class="badge badge-danger"><a href="hapus.php?nim=<?= $mhs['nim']; ?>">hapus</a></span>
            </td>
          </tr>
        <?php $no++;
        endforeach; ?>
      </tbody>
    </table>
  </div>
</body>

</html>