<?php

$bestand = $_FILES['lisa']['tmp_name'];
include 'inlezen.php';

$d = inlezen($bestand);    // bestand nu ingelezen
$wz = $d[0];
$woorden = $d[1];

include 'oplossen.php';
