<?php
    include 'conn.php';

    $insert_query1 = "insert into students1 values (101,'prem','Bsc.IT')";

    $a = $conn -> query($insert_query1);

    echo "<br><br>";
    if($a) {
        echo "<h2> Record Inserted successfully </h2>";
    } else {
        echo "<h2> There is a problem </h2>";
    }
?>