<?php
//koneksi ke database: error -> ada error messege nya. 
$conn = mysqli_connect('localhost', 'root', '', 'prak_pabw');

// mengambil data (fetch) dari object $result
// mysqli_fetch_row() hasilnya array numerik
// mysqli_fetch_assoc() hasilnya array assosiatif
// mysqli_fetch_array() hasilnya array numerik dan assosiatif
// mysqli_fetch_object() hasilnya berupa object(stdClass)

// while ($mhs = mysqli_fetch_assoc($result))
// selama masih ada recordnya
function query($sqlQuery)
{
  global $conn;
  // ambil data dari tabel mahasiswa pada database mahasiswa pweb
  $result = mysqli_query($conn, $sqlQuery);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;
  $nama = $data['nama'];
  $nim = $data['nim'];
  $alamat = $data['alamat'];
  $prodi = $data['prodi'];
  $sqlQuery = "INSERT INTO mahasiswa VALUES(
    '$nim',
    '$nama',
    '$alamat',
    '$prodi'
  )";
  // var_dump($sqlQuery);
  // die();
  mysqli_query($conn, $sqlQuery);
  return mysqli_affected_rows($conn);
}
function hapus($nim)
{
  global $conn;
  $sqlQuery = "DELETE FROM mahasiswa WHERE nim=$nim";
  mysqli_query($conn, $sqlQuery);
  return mysqli_affected_rows($conn);
}

function cari($nim)
{
  global $conn;
  $sqlQuery = "Select * from mahasiswa where nim=$nim";
  $result = mysqli_query($conn, $sqlQuery);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
