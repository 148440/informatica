<?php

$bestand = 'tekst.txt';
$alleRegels = FILE($bestand);

//print_r($alleRegels);

function inlezen($fileName) {
    $wz = array();
    $woorden = array();

    $regels = FILE($fileName);
    $legeRegelGezien = false;
    foreach ($regels as $regel) {
        $str_split_ding = str_split(trim($regel));
        if (strlen($regel) <= 2) {
            $legeRegelGezien = true;
            continue;
        }
        if ($legeRegelGezien == true) {            
            $woorden[] = $str_split_ding;
        } else {
            $wz[] = $str_split_ding;
        }
        // logica, als regel te klein is (strlen(...) < 2) 
        // dan geen wz, maar woorden[] = str_split ding
        // ander dan wel aan de wz toevoegen
    }
    return array($wz, $woorden);
}
