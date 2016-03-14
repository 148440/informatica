<head>
    <title> Woordzoeker Sabrina, Florence, Lisa </title>
    <link href="style.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script> $(document).ready(function ()
        {
$("div").click(function() {
    console.log("jkdsfjlksdjflksdjflskdj");
})
            $("div").hover(function () {
                console.log('fsdfsdfs');
                $(this).css({'background-color': 'pink'});
                var t = $(this).text();
                $("#" + t).css("color", "pink");

            });

            $("div").mouseout(function () {
                $(this).css({'background-color': 'white'});
                var t = $(this).text();
                $("#" + t).css("color", "black");

            });
        });
    </script>

</head>

<html>
    <body>

        <form method="POST"  action="GaInlezen.php" enctype="multipart/form-data">
            <input type="file" name="lisa">
            <input type="submit" value = 'oplossen'>
        </form>

    </body>
</html>
<?php
/*

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
    $regel = str_split(trim($regel));
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

 


foreach($woorden as $woord) {

    print "<div>" . $woord . "</div>";
 
    print "<br>";
}
 */