<?php
// koneksi ke database
$db = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($db, "SELECT * FROM siswa");
// if ( $result ){ 
    // echo mysqli_error($db);
// }
// var_dump($result) ;

// ambil data (fetch) siswa dari object result
// mysqli_fetch_row() //mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembaikan keduanya 
// mysqli_fetch_object()

// while( $ssw = mysqli_fetch_assoc($result) ) {
// var_dump($ssw[4]); //_row
// var_dump($ssw["jurusan"]); _assoc
// var_dump($ssw["jurusan"]); // fleksibel //array
// var_dump($ssw->email); // object
    // var_dump($ssw["nama"]);
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<h1>Daftar Siswa</h1>

<table border="1" cellpadding="10" cellspacing="0" >

<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
</tr>

<?php $i = 1; ?>
<?php while( $row = mysqli_fetch_assoc($result) ) : ?>
<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="">ubah</a> |
        <a href="">hapus</a>
    </td>
    <td><img src="img/<?= $row["gambar"];  ?>" width="50"></td>
    <td><?= $row["nis"]; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["jurusan"]; ?></td>
</tr>
<?php $i++; ?>
<?php endwhile; ?>

</table>

</body>
</html>