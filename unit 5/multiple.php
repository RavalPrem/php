<?php
    include 'conn.php';

    echo "<br><br>";

    $insert_query = array(
        "INSERT INTO students1 values (109,'Raval','Msc.IT')",
        "INSERT INTO students1 values (105,'Neel','Msc.IT(cyber spe.)')",
        "INSERT INTO students1 values (110,'Raval','Msc.IT')",
        "INSERT INTO students1 values (109,'Raval','Msc.IT')",
        "INSERT INTO students1 values (104,'Neel','Msc.IT(cyber spe.)')",
        "INSERT INTO students1 values (112,'Raval','Msc.IT')",
        "INSERT INTO students1 values (124,'Raval','Msc.IT')",
        "INSERT INTO students1 values (108,'Neel','Msc.IT(cyber spe.)')",
        "INSERT INTO students1 values (123,'Taksh','Msc.IT(Dual Spe.)')",
    );

    foreach($insert_query as $a) {
        mysqli_query($conn,$a);
    } 

    echo "all done";
?>