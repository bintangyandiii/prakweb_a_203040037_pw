<?php
    require 'function.php';

    $conn =mysqli_connect("localhost", "root", "", "prakweb_a_203040037_pw");

    $result = mysqli_query($conn, "SELECT * FROM buku");

    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
        
    }
    $buku = $rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="style.css">

  <style>
    img {
      height: 140px;
      ;
    }
  </style>
  <title>Daftar Buku</title>
</head>

<body>
  <h3>Daftar Buku</h3>

  
  <table border="1" cellspacing="0" cellpadding="10">
    <tr>
      <th>No</th>
      <th>JudulBuku</th>
      <th>TahunTerbit</th>
      <th>Gambar</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($buku as $b) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $b['Judul']; ?></td>
        <td><?= $b['TahunTerbit']?></td>
        <td><img src="img/<?= $b['Gambar']; ?>" width=""></td>
        <td>
          <a href="detail.php">detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>
