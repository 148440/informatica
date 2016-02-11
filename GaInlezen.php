<?php

//print_r($_FILES);
$bestand = $_FILES['lisa']['tmp_name'];
include 'inlezen.php';


$d = inlezen($bestand);    // bestand nu ingelezen
$wz = $d[0];
$woorden = $d[1];

include 'toUpperCase.php';

include 'oplossen.php';

include 'maakTabel.php';

include 'laatWoordenZien.php';