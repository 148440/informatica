<?php
<<<<<<< HEAD

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


=======
$bestand = 'tekst.txt';

$alleRegels = FILE($bestand);

print_r($alleRegels);

// zoek op strlen(regel) <= 2 dan is het de lege regel
// $woorden[] = $regel


$woorden[] = "hond";
$woorden[] = "sushi";
$woorden[] = "zebra";
$woorden[] = "pizza";
$woorden[] = "broek";

?>
>>>>>>> 49de712eafb14fa519e07b012ce73411f0830c5c
