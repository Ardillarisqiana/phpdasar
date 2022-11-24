<?php 
//echo date ("l"); 
//("l") l menyesuaikan hari
?>

<?php 
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");  <--salah satu cara untuk menampilkan tgl hari ini

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time(); 
// echo date("l", time()+60*60*24*100);
// echo date(" d M Y ", time()+60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo mktime(0,0,0,8,14,2005);
// echo date("l", mktime(0,0,0,8,25,1985));


// strtotime
// echo strtotime("14 aug 2005")
echo date("l", strtotime("14 aug 2005"));





?>