<?php
// nodig $wz[][]
echo '<html>';
echo '<table border=2>';

echo  '<background-color=#ffffff >' ;
foreach($wz as $regel) {
    //$regel = str_split(trim($regel));
    print '<tr>';
    foreach($regel as $letter) {
        print "<td>";
        if ($letter == '-') {
            $letter = '/';  // rand() chr() VOOR RANDOM LETTERS
         
            echo $letter = chr(rand(65, 65+25))  ; // Hex value
        }else

        print $letter;
        print "</td>";
    }
    print '</tr>';
}
echo '</table>';
