<?php

require 'functions.php';

if( isset($_POST["register"]) ) {


    if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('User baru berhasil ditambahkan!');
              </script>";
    } else {
        echo mysqli_error($conn); 
    } 

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
    body {
			background-color: #D7C0AE;
		}


		.container {
			width: 400px;
            margin: auto;
            margin-top:150px;
			background-color: #fff;
            border: 5px solid #967E76;
            border-radius: 10px;
            padding: 10px 30px 20px 10px;
		}

    
    label {
        display: block;
    }
</style>
</head>
<body>
<div class="container">
<h1 style="text-align:center;">Halaman Registrasi</h1>


<form action="" method="post">

    <ul>
        <li>
            <label for="username">username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <label for="password2">Konfirmasi Password :</label>
            <input type="password" name="password2" id="password2">
        </li>
        <li>
            <button type="submit" name="register">Register</button>
        </li>
    </ul>

</form>
</div>
</body>
</html>