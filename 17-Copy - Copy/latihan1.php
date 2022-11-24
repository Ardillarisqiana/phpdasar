<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'functions.php';
$siswa = query("SELECT * FROM siswa");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
	$siswa = cari($_POST["keyword"]);
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<style>
		 body {
			background-color: #ADD8E6;
		}


		.container {
			width: 800px;
            margin: auto;
            margin-top:50px;
			margin-bottom: 100px;
			background-color: #fff;
            border: 5px solid #E0FFFF;
			border-radius: 5px;
            padding: 20px;
		}

	</style>

</head>
<body>
<div class="container">

<h1 style="text-align:center;">Daftar siswa</h1>

<a href="tambah.php">Tambah data siswa</a>
<br><br>

<form action="" method="post">

	<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
	<button type="submit" name="cari">Cari!</button>
	
</form>

<br>
<table border="1" cellpadding="10" cellspacing="0">

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
	<?php foreach( $siswa as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('apa anda yakin?');">hapus</a>
		</td>
		<td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
		<td><?= $row["nis"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["jurusan"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	
</table>
<br>

<a href="logout.php">Logout</a>

</div>
</body>
</html>