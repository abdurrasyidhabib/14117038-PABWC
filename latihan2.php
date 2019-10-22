<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>harga bet nama</title>
</head>

<body>
  <form action="" method="GET">
    <input type="text" name="nama" placeholder="nama . . .">
    <input type="text" name="warna" placeholder="warna . . .">
    <button type="submit" name="order">Order</button>
    <br>
  </form>
  <?php
  if (isset($_GET['order'])) {
    $nama = $_GET['nama'];
    $warna = $_GET['warna'];

    function getWarna($warna)
    {
      if (empty($warna)) {
        $warna = 'red';
      }
      return $warna;
    }
    function getHarga($nama)
    {
      $jml_karakter = strlen($nama);
      if ($jml_karakter >= 1 && $jml_karakter <= 10) {
        $harga = $jml_karakter * 300;
      } else if ($jml_karakter >= 11 && $jml_karakter <= 20) {
        $harga = $jml_karakter * 500;
      } else if ($jml_karakter > 20) {
        $harga = $jml_karakter * 700;
      }
      return $harga;
    }
    function tampil(&$nama, &$warna)
    {
      $harga = getHarga($nama);
      $warna = getWarna($warna);
      return "<h1> 
                <span style=\"color:$warna\"> 
                  $nama 
                </span>
        <br>
        Harga Bet: Rp$harga;
      </h1>
      ";
    }
    echo tampil($nama, $warna);
    // echo "<p style= \" color:$warna \"> Nama : $nama</p>";
  }

  ?>
</body>

</html>