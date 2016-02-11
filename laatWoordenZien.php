<?php

foreach($woorden as $woord) {
    $woord = implode('', $woord);
    print "<div>" . $woord . "</div>";
 
    print "<br>";
}