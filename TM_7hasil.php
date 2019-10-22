<?php
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jkel = $_POST['jkel'];
  $goldar = $_POST['goldar'];
  $hobi = $_POST['hobi'];
  $keterangan = $_POST['keterangan'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hasil Form</title>
  <style>
    td {
      padding: 2px 10px;
    }
  </style>
</head>

<body>
  <table class="table" border="1" cellspacing="0">
    <tbody>
      <tr>
        <td width="150px">Nama</td>
        <td><?= $nama; ?></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td><?= $jkel; ?></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><?= $alamat; ?></td>
      </tr>
      <tr>
        <td>Golongan Darah</td>
        <td><?= $goldar; ?></td>
      </tr>
      <tr>
        <td>Hobi</td>
        <td><?php foreach ($hobi as $h) {
              echo "$h, ";
            } ?></td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td><?= $keterangan; ?></td>
      </tr>
    </tbody>
  </table>
</body>

</html>