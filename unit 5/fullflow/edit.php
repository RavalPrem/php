<?php
    include 'conn.php';

    $sid = $_GET['id'];
    $query = "SELECT * FROM students1 where sid = $sid";

    $result = mysqli_query($conn,$query);

    if (mysqli_num_rows($result) == 0) {
        die('Student not found!');
    }

    $row = mysqli_fetch_row($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Please</title>
</head>
<body>
    <form method="POST">
        id : <input type="text" value="<?php echo $_GET['id']; ?>" readonly> <br> <br>
        name : <input type="text" name="sname" value="<?php echo $row[1]; ?>" /><br><br>
        Course : <input type="text" name="scourse" value="<?php echo $row[2]; ?>" /><br><br>

        <input type="submit" value="update changes" name="submit">
    </form>

    <?php

        if(isset($_POST['submit'])) {
            $name = $_POST['sname'];
            $course = $_POST['scourse'];

            $id = $_GET['id'];

            $update_query = "UPDATE students1 set Name = '$name', course = '$course' where sid = $id";

            $resultUpdate = $conn -> query($update_query);

            echo "<br>";
            if($resultUpdate) {
                echo "Updated succesfully";
                header('Location: tableview.php');
                exit;
            } else {
                die('there is something not right');
            }
        }
    ?>
</body>
</html>