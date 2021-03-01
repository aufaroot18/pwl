<?php
  // variable: digunakan sebagai wadah untuk menyimpan nilai
  // membuat variabel nama, jurusan, angkatan
  $nama = "Aufa Billah";
  $jurusan = "Teknik Informatika";
  $angkatan = 2020;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Hai Selamat Datang</h2>
  <p>
    Nama saya <?= $nama ?>
  </p>
  <p>
    Saya sedang mengambil jurusan <?= $jurusan ?> di STT-NF
  </p>
  <p>
    Saya angkatan <?= $angkatan ?>
  </p>
</body>
</html>