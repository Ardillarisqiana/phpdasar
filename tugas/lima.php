<?php

$murid = [
  [
    "Nama" => "Joni Susanto",
    "Kelas" => "XII TKR 2",
    "Alamat" => "Pemalang"
  ],
  [
    "Nama" => "Intan Ayu",
    "Kelas" => "XII TB 1",
    "Alamat" => "Brebes"
  ],
  [
    "Nama" => "Salma Karima",
    "Kelas" => "XI RPL 3",
    "Alamat" => "Batang"
  ]


  ];

$n = 1;


?>

<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
       <table border=1 cellspacing="0" cellpadding="10">

      <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Alamat</td>
      </tr>
      
      <?php foreach($murid as $md) : ?>
      <tr>
        <td><?= $n++ ?></td>
        <td><?= $md["Nama"] ?></td>
        <td><?= $md["Kelas"] ?></td>
        <td><?= $md["Alamat"] ?></td>
      </tr>
      <?php endforeach; ?>

    </table>
      </body>
</html>