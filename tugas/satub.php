<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B</title>
</head>
<body>
<?php 
$nilai = 90;
if ($nilai > 89) {
    echo "sangat baik";
}
else if  ($nilai > 79) {
    echo "baik";
}
else if ($nilai > 69) {
    echo "cukup";
}
else if($nilai > 59) {
    echo "kurang";
}
else if ($nilai > 49) {
    echo "sangat kurang";
}
?>
</body>
</html>