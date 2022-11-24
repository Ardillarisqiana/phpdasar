<?php
// array    
// variabel yg dapt menampung banyak nilai
// elemen pada array


// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arrl = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r
// var_dump ($hari);
// echo "<br>";
// print_r ($bulan);

// Menampilkan 1 elemen pada array
// echo $arrl[0];
// echo "<br>";
// echo $bulan[1]

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);


?>