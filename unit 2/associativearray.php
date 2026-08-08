<?php
    $names_age = array("prem" => 20, "Taksh" => 21, "Neel" => 22);

    echo "all names down below <br>";
    foreach($names_age as $name => $age) {
        echo "$name => $age <br>";
    }

    #the another associative array
    $marks = [
        "PHP" => 85,
        "Java" => 78,
        "DBMS" => 90,
        "Python" => 88
    ];

    echo "<br> <br>";

    echo "marks down below <br>";

    foreach($marks as $subject => $mark) {
        echo "$subject : $mark <br>";
    }
?>