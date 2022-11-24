<?php

$siswa = [
    ["Joni Susanto", "XII TKR 2", "Pemalang"],
    ["Intan Ayu ", "XII TB 1", "Brebes"],
    ["Salma Karima", "XI RPL 3", "Batang"]
];

$n = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table border= 1 cellspacing="0" cellpadding="10">


<tr>
    <td>No</td>
    <td>Nama</td>
    <td>Kelas</td>
    <td>Alamat</td>
</tr>

<?php foreach($siswa as $sw) : ?>
<tr>
    <td><?= $n++; ?></td>
    <td><?= $sw[0] ?></td>
    <td><?= $sw[1] ?></td>
    <td><?= $sw[2] ?></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>