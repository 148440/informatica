<?php

// $wz[i][j] : alle letters in uppercase

foreach($wz as $i => $regel) {
    foreach($regel as $j => $letter) {
        if (ctype_lower($letter))
                $wz[$i][$j] = strtoupper ($letter);
    }
}


