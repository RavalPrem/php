<?php
    $ar1 = array(1,2,3,4,4);
    echo "ar1 --> ".$ar1[0];

    echo "<br> array down below";
    echo "<br>";

    for($i = 0; $i < sizeof($ar1); $i++) {
        echo $ar1[$i] . " ";
    }

    $ar2 = [10,20,30,40,50];
    echo "<br><br> the second for loop for the printing array <br>";
    foreach($ar2 as $a) {
        echo $a . " ";
    }
?>