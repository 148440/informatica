<head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script> $(document).ready(function ()
        {

            $("div").hover(function () {
                console.log('fsdfsdfs');
                $(this).css({'background-color': 'pink'});
                var t = $(this).text();
                
                $("." + t).css("color", "pink");

            });

            $("div").mouseout(function () {
                $(this).css({'background-color': 'white'});
                var t = $(this).text();
                $("#" + t).css("color", "black");

            });
        });
    </script>
</head><?php

//print_r($_FILES);
$bestand = $_FILES['lisa']['tmp_name'];
include 'inlezen.php';


$d = inlezen($bestand);    // bestand nu ingelezen
$wz = $d[0];
$woorden = $d[1];

include 'toUpperCase.php';

include 'oplossen.php';

include 'maakTabel.php';

include 'laatWoordenZien.php';