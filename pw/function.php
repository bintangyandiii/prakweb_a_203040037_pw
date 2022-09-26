<?php

function koneksi()
{
  return mysqli_connect("localhost", "root", "", "prakweb_a_203040037_pw");
}


function query($query)
{
  $conn = Koneksi();

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = Koneksi();

  $id = htmlspecialchars($data['IDBuku']);
  $judul  = htmlspecialchars($data['JudulBuku']);
  $tahun = htmlspecialchars($data['TahunTerbit']);
  $gambar = htmlspecialchars($data['Gambar']);

  $query = "INSERT INTO
              buku
            VALUE
            (null, '$id', '$judul', '$tahun', '$gambar');
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = Koneksi();
  mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = Koneksi();

  $id = $data['id'];
  $idb = htmlspecialchars($data['IDBuku']);
  $judul  = htmlspecialchars($data['JudulBuku']);
  $tahun = htmlspecialchars($data['TahunTerbit']);
  $gambar = htmlspecialchars($data['Gambar']);

  $query = "UPDATE buku SET
              IDBuku = '$idb',
              JudulBuku = '$judul',
              TahunTerbit = '$tahun',
              Gambar = '$gambar'
              WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT *FROM buku 
              WHERE 
              JudulBuku LIKE '%$keyword%' OR
              TahunTerbit LIKE '%$keyword%'
              ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}