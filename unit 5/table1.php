<?php
    include 'conn.php';

    $query1 = "CREATE TABLE students1(sid INT, Name VARCHAR(30), Course VARCHAR(30))";

    $a = mysqli_query($conn,$query1);

    echo "<br><br>";
    if($a) {
        echo "<h2> Table created successfully </h2>";
    } else {
        echo "<h2>There is a problem while creating the table</h2>";
    }
?>