<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php $star=4;
  for($a=1; $a<=$star; $a++){
        for($c=$star; $c>=$a; $c-=1){
               echo "*";
        };
         echo "<br>";
   }; ?> 
</body>
</html>