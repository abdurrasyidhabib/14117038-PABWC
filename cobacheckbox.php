<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Checkbox</title>
</head>

<body>
  <form action="" method="POST">
    <label for="hobi">pilih hobi</label>
    <input type="checkbox" name="hobi[]" id="voli" value="voli"> voli
    <input type="checkbox" name="hobi[]" id="bola" value="bola"> bola
    <input type="checkbox" name="hobi[]" id="badminton" value="badminton"> badminton
    <input type="checkbox" name="hobi[]" id="jogging" value="jogging"> jogging
    <button type="submit" name="submit"></button>

    <label for="apapun">jenis kelamin</label>
    <input type="radio" name="jkel" value="pria"> pria
    <input type="radio" name="jkel" value="wanita"> wanita
  </form>
  <?php
  if (isset($_POST['submit'])) {
    var_dump($_POST['jkel']);
  }
  ?>
</body>

</html>