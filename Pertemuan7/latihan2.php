<?php
// cek apakah tidak ada data di $_GET\
// isset adalah untuk mengecek apakah sebuah variabel sudah pernah dibuat atau belum
if( !isset($_GET["nama"]) || 
    !isset($_GET["nrp"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"])) {
    // redirect adalah memindahkan usernya dari halaman kehalaman lain
    header("Location: latihan1.php");
    exit;
    // exit supaya script dibwahnya tidak dieksekusi\
}    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"];?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["email"];?></li>
        <li><?= $_GET["jurusan"];?></li>
    </ul>

    <a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>