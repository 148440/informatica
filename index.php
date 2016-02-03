<head>
    <title> Woordzoeker Sabrina, Florence, Lisa </title>
    <link href="style.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script> $(document).ready(function ()
        {
            $("button").click(function(){ 
                $("#p1").css("color", "red");
             
               
               
            });
            });        </script>
</head>

<html
 <body>
        <p id="p1">Hond</p><p>abc</p>
     
     
<button id="#p1">Show All</button>


</body>
</html>
<?php

echo "hello Informatica v";
include "inlezen.php";

$rij=count($alleRegels);
$kolom=strlen(trim($alleRegels[0]));
print_r(str_split(trim($alleRegels[0])));
$k_1 = 0;
$r_1 = 0;
echo '<html>';
echo '<table border=2>';
foreach($alleRegels as $regel) {
    print '<tr>';
    foreach(str_split(trim($regel)) as $letter) {
        print "<td>";
        if ($letter == '-') {
            $letter = '/';  // rand() chr() VOOR RANDOM LETTERS
        }
        print $letter;
        print "</td>";
    }
    print '</tr>';
}
echo '</table>';

/*
while($k_1 < $kolom)
{
    echo '<tr>';
    
    while($r_1 < $rij)
{
    echo '<td> ___ </td>';
    $r_1++;
}
echo '</tr>';
$r_1=0;
$k_1++;
}

 */


foreach($woorden as $woord) {
    print $woord;
    print "<br>";
}
?>


