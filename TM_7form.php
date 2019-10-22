<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <title>Tugas Mingguan 7</title>
</head>

<body>
  <div class="col-sm-8 m-auto">
    <form action="TM_7hasil.php" method="post">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" placeholder="masukkan nama kamu">
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat">

      </div>
      <label for="jkel" class="mr-5 mt-4 mb-4">Jenis Kelamin</label>
      <div class="form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="jkel" value="Pria"> Pria
          <input type="radio" class="form-check-input" name="jkel" value="Wanita"> Wanita
        </label>
      </div>

      <div class="form-group">
        <label for="goldar">Golongan Darah</label>
        <select class="form-control" name="goldar" id="goldar">
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="AB">AB</option>
          <option value="O">O</option>
        </select>
      </div>

      <label for="" class="mr-5 mt-4 ">Hobby</label>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Voli" name="hobi[]">Bola Voli
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Memasak" name="hobi[]">Memasak
        </label>
      </div>
      <div class=" form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Bernyanyi" name="hobi[]">Bernyanyi
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Menari" name="hobi[]">Menari
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Wirausaha" name="hobi[]">Wirausaha
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Rebahan" name="hobi[]">Rebahan
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Ngoding" name="hobi[]">Ngoding
        </label>
      </div>
      <div class="form-group mt-5">
        <label for="alamat">Keterangan</label>
        <textarea class="form-control" name="keterangan" id="keterangan" rows="5">

        </textarea>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>

</body>

</html>