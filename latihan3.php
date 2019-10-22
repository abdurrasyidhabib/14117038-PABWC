<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Faktorial</title>
</head>

<body>
  <form action="" method="GET">
    <input type="number" name="angka">
    <button type="submit" name="faktorialkan">Faktorialkan!</button>
  </form>
  <?php
  if (isset($_GET["faktorialkan"])) {
    $angka = $_GET["angka"];
    function faktorial($angka)
    {
      if ($angka == 1) {
        return 1;
      } else {
        return $angka * faktorial($angka - 1);
      }
    }
    echo "hasil faktorial: " . faktorial($angka);
  }
  ?>
</body>

</html>