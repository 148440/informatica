<head>
    <title> Woordzoeker Sabrina, Florence, Lisa </title>
    <link href="style.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script> $(document).ready(function ()
        {
            $("div").hover(function(){ 
                $(this).css({ 'background-color': 'pink'})
                var t = $(this).text();
                $("#" + t).css("color", "pink");
             
               
               
            });
             $("div").mouseout(function(){ 
                $(this).css({ 'background-color': 'white'})
                var t = $(this).text();
                $("#" + t).css("color", "black");
             
               
            });
=======
>>>>>>> 49de712eafb14fa519e07b012ce73411f0830c5c
            });        </script>
</head>

<html
 <body>
<<<<<<< HEAD
        <p id="hond">Hond</p>
        <p id="sushi">Sushi</p>
        <p id="zebra">Zebra</p>
        <p id="pizza">Pizza</p>
        <p id="broek">Broek</p>
        
<form method="POST"  action="GaInlezen.php"
      <input type="file" name="lisa">
    <input type="submit">
</form>
          
     
=======
        <p id="p1">Hond</p><p>abc</p>
     
     
<button id="#p1">Show All</button>
>>>>>>> 49de712eafb14fa519e07b012ce73411f0830c5c


</body>
</html>
<?php

<<<<<<< HEAD
//echo "hello Informatica v";
include "inlezen.php";
//include "haalStreepjesWeg.php";
//include "printWoordzoekerTabel.php";

$rij=count($alleRegels);
$kolom=count($alleRegels[0]);
//print_r(str_split(trim($alleRegels[0])));
$k_1 = 0;
$r_1 = 0;
echo '<html>';
echo '<table border=2>';
echo  '<background-color=#ffffff >' ;
foreach($alleRegels as $regel) {
    print '<tr>';
    foreach($regel as $letter) {
        print "<td>";
        if ($letter == '-') {
            $letter = '/';  // rand() chr() VOOR RANDOM LETTERS
         
            echo $letter = chr(rand(65, 65+25))  ; // Hex value
        }else
=======
foreach($alleRegels as $regel) {
    print '<tr>';
    foreach(str_split(trim($regel)) as $letter) {
        print "<td>";
        if ($letter == '-') {
            $letter = '/';  // rand() chr() VOOR RANDOM LETTERS
        }
>>>>>>> 49de712eafb14fa519e07b012ce73411f0830c5c
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
<<<<<<< HEAD
    print "<div>" . $woord . "</div>";
=======
    print $woord;
>>>>>>> 49de712eafb14fa519e07b012ce73411f0830c5c
    print "<br>";
}
?>


