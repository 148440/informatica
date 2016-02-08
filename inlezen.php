<?php

$bestand = 'tekst.txt';

function inlezen($fileName) {
    $wz = array();
    $woorden = array();
    
    $regels = FILE($fileName);
    foreach ($regels as $regel) {
        $str_split_ding = str_split(trim($regel));
       
        // logica, als regel te klein is (strlen(...) < 2) 
        // dan geen wz, maar woorden[] = str_split ding
        // ander dan wel aan de wz toevoegen
        $wz[] = $str_split_ding;
    }
    return array($wz, $woorden);
}


