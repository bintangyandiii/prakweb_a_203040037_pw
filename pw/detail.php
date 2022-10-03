<?php
require 'function.php';
// ambil id url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$b = query("SELECT * FROM  buku WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Buku</title>
</head>

<body>
  <h3>Detail Buku</h3>
  <ul>
    <li><a href="ubah.php">ubah</a> | <a href="hapus.php" onclick="return confirm('Apakah anda yakin dengan ini?')">hapus</a></li>
    <li><a href="index.php">kembali kedaftar Buku</a></li>
  </ul>

</body>

</html>