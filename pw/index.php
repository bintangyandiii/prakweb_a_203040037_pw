<?php
    $conn =mysqli_connect("localhost", "root", "", "prakweb_a_203040037_pw");

    $result = mysqli_query($conn, "SELECT * FROM buku");

    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
        
    }
    $buku = $rows;
?>

<!DOCTYPE html>
<head>
    <title>halaman Buku</title>
</head>
<body>
    <h1>daftar Buku</h1>

    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>IDBuku</th>
        <th>JudulBuku</th>
        <th>TahunTerbit</th>
        <th>Gambar</th>
        <th>Pengaturan</th>
    </tr>

    <?php $i=1;?>
    <?php foreach($buku as $row):?>

    <tr>
        <td><?= $row["IDBuku"];?></td>
        <td><?= $row["Judul"];?></td>
        <td><?= $row["TahunTerbit"];?></td>
        <td><img src="img/<?= $row["Gambar"];?>" width="50" ></td>
        <td>
        <a href="ubah.">ubah</a>|
        <a href="hapus.php">hapus</a>
        </td>
    </tr>
    <?php $i++;?>
    <?php endforeach;?>
    </table>
</body>
</html>
