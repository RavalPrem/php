<?php
    include 'conn.php';

    echo "<br><br>";

    $query = "SELECT * FROM students1";

    $rows = mysqli_query($conn,$query);

    if(mysqli_num_rows($rows) > 0) {
        while($row = mysqli_fetch_row($rows)) {
            echo "ID : " . $row[0] ." ";
            echo "Name : " . $row[1] ." ";
            echo "Course : " . $row[2] . "<br>";
        }
    }
?>