<?php
    include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete using id</title>
</head>
<body>
    <form method="get">
        Enter id : <input type="number" name="sid"/> <br>
        <input type="submit" value="submit" name="submit"/><br>
    </form>

    <?php
        if(isset($_GET['submit'])) {
            $sid = $_GET['sid'];
            
            $delete_query = "DELETE FROM students1 where sid = $sid";

            $a = $conn -> query($delete_query);

            if($a) {
                echo "<h2> Record id $sid deleted successfully </h2>";
            } else {
                echo "<h2> Record $sid is not in the table </h2>";
            }
        }
    ?>
</body>
</html>