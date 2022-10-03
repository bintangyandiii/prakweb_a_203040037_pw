<?php
require 'function.php';
//mengambil data dari url
$id = $_GET['id'];

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

// query mahasiswa berdasarkan id
$b = query("SELECT * FROM  buku WHERE IDBUKU = $id");
// cek apakah tombol ubah sudah ditekan 
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah);
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal diubah!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Buku</title>
</head>

<body>
  <h3>From Ubah Data Buku</h3>
  <form action="" method="POST">
    <input type="hidden" name="IDBuku" value="<?= $b['id']; ?>">
    <ul>
        <label>
          Nrp :
          <input type="text" name="JudulBuku" required value="<?= $b['JudulBuku']; ?>">
        </label>
      </li>
      <li>
        <label>
          Email
          <input type="text" name="TahunTerbit" required value="<?= $b['TahunTerbit']; ?>">
        </label>
      </li>
      <li>
        <label>
          Jurusan
          <input type="text" name="Gambar" required value="<?= $b['Gambar']; ?>">
        </label>
      </li>
      <li>
        <label>
          Gambar
          <input type="text" name="gambar" required value="<?= $b['gambar']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
      </li>


    </ul>


  </form>

</body>

</html>