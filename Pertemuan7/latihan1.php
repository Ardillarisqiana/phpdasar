<?php
// $_GET
// $_GET["nama"] = "Ardilla Risqiana";
// $_GET["nrp"] = "0123456789";
// var_dump($_GET);

$mahasiswa = [
    [
        "nama" => "Ardilla Risqiana",
        "nrp" => "0123456789",
        "email" => "risqianaardilla@gmail",
        "jurusan" => "Teknik Informatika",
        "gambar" => "gambar.jpg"
    ],
    [
       "nama" => "Arkana Donata",
       "nrp" => "0123456789",
       "email" => "donata@gmail.com",
       "jurusan" => "Teknik Industri",
       "gambar" => "gambar.jpg"  
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>video 09</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
           <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?> "><?=$mhs["nama"];?></a>
        </li>
    <?php endforeach; ?> 
    </ul>
</body>
</html>