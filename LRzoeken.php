<?php

function isDaarHetLRWoord($wz, $woord, $i, $j) {
    // in wz[i][j] staat eerste letter van het woord
    $gehaktWoord = str_split($woord);
    foreach ($gehaktWoord as $k => $letter) {
        if ($wz[$i][$j+$k] == $letter) {
            ;
        } else {
            return false;
        }
    }


    return true;
    ; // als het woord op positie i,j gevonden is
}

$woord = "HOND";
$eersteLetterVanHetWoord = str_split($woord)[0];

// zoeken van links naar rechts
foreach ($wz as $i => $rij) {
    foreach ($rij as $j => $letter) {
        if ($letter == $eersteLetterVanHetWoord) {
            $t = isDaarHetLRWoord($wz, $woord, $i, $j);
            if ($t == true) {   // gevonden
                print "$woord gevonden op $i, $j";
            } else {
                 print "$woord NIET gevonden op $i, $j";
            }
        }
    }
}
?>