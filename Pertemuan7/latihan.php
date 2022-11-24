<?php
// Variabel Scope / lingkup variabel 
$x = 10;
// echo $x; (variabel lokal)

function munculX() {
    global $x;
    echo $x; 
}

munculX();


?>