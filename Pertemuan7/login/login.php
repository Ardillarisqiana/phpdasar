<?php
// cek apakah tombol sumbit sudah tekan atau belum 
if (isset($_POST["sumbit"])) {
// cek username & password
if( $_POST["username"] == "admin" && $_POST["password"] =="123") {
// jika benar, resirect ke halaman admin
header("Location: admin.php");
exit;
} else {
// jika salah, tampilkan pesan kesalahan
$error = true;

}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
<h1>Selamat Datang Admin</h1>

<?php if( isset(error)) : ?>
<p style="color: red; font-style: italic;">username / password salah</p>
<?php endif;?>

<ul>
<form action="" method="post">
    <li>
        <label for="username">username :</label>
        <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="password">password :</label>
        <input type="password" name="password" id="password" >
    </li>
    <li>
        <button type="sumbit" name="submit">Login</button>
    </li>
</form>
</ul>

</body>
</html>