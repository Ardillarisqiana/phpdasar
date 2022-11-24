<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}


require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'latihan1.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'latihan1.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data siswa</title>
	<style>
		 body {
			background-color: #ADD8E6;
		}


		.container {
			width: 400px;
            margin: auto;
            margin-top:150px;
			background-color: #fff;
            border: 5px solid #E0FFFF;
			border-radius: 8px;
            padding: 10px;
		}

    
    label {
        display: block;
    }
</style>

</head>
<body>
	<div class="container">
	<h1 style="text-align:center;">Tambah data siswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
		<li>
				<label for="id">ID : </label>
				<input type="text" name="id" id="id" required>
			</li>
			<li>
				<label for="nis">NIS : </label>
				<input type="text" name="nis" id="nis" required>
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama">
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email">
			</li>
			<li>
				<label for="jurusan">Jurusan :</label>
				<input type="text" name="jurusan" id="jurusan">
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="file" name="gambar" id="gambar">
			</li>
			<br>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>

	</form>

	</div>


</body>
</html>