<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data siswa berdasarkan id
$sw = query("SELECT * FROM siswa WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'latihan1.php';
			</script>
		"; 
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'latihan1.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data siswa</title>
	<style>
	 body {
			background-color: #ADD8E6;
		}


		.container {
			width: 400px;
            margin: auto;
            margin-top:130px;
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
	<h1 style="text-align:center;">Ubah data siswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $sw["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?= $sw["gambar"]; ?>">
		<ul>
			<li>
				<label for="id">ID : </label>
				<input type="text" name="id" id="id" required value="<?= $sw["id"]; ?>">
			</li>
			<li>
				<label for="nis">NIS : </label>
				<input type="text" name="nis" id="nis" required value="<?= $sw["nis"]; ?>">
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" value="<?= $sw["nama"]; ?>">
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email" value="<?= $sw["email"]; ?>">
			</li>
			<li>
				<label for="jurusan">Jurusan :</label>
				<input type="text" name="jurusan" id="jurusan" value="<?= $sw["jurusan"]; ?>">
			</li>
			<br>
			<li>
				<label for="gambar">Gambar :</label>
				<img src="img/<?= $sw['gambar']; ?>" width="55"> <br>
				<input type="file" name="gambar" id="gambar">
			</li>
			<br>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>

	</form>
	</div>



</body>
</html>