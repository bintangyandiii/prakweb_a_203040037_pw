<?php
require 'function.php';

// cek apakah tombol tambah sudah ditekan 
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan);
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>From Tambah Data Buku</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          JudulBuku :
          <input type="text" name="Judul" autofocus required>
        </label>
      <li>
        <label>
          TahunTerbit :
          <input type="text" name="TahunTerbit" required>
        </label>
      </li>
      <li>
        <label>
          Gambar
          <input type="text" name="Gambar" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
      </li>


    </ul>


  </form>

</body>

</html>
