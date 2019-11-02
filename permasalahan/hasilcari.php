<?php
require 'functions.php';
$nim = $_POST['nim'];
$mahasiswa = query("SELECT nim, nama, alamat, Prodi from mahasiswa natural join jurusan WHERE mahasiswa.ID_jur=jurusan.ID_jur and nim=$nim;");
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
          </tr>
        <?php $no++;
        endforeach; ?>
      </tbody>
    </table>
  </div>
</body>

</html>