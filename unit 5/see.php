<?php
 if(isset($_POST["submit"]))
{
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "college";

 $conn = mysqli_connect($servername,$username,$password,$database);
 if(!$conn)
    {
        die("connection failed".mysqli_connect_error());
    }
      $id = $_POST["id"];
    $name = $_POST["name"];
    $city = $_POST["city"];
    $marks = $_POST["marks"];
    $sql = "update student set name='$name',city = '$city',marks = '$marks' where id = '$id'";
if(mysqli_query($conn,$sql))
    {
        echo "record update successfull";
    }
    else
        {
            echo "error".mysqli_error($conn);
        }
        mysqli_close($conn);
}
?>
<html>
    <body>
        <form method="post">
            id:
            <input type="number" name="id" required>  
            name:
            <input type="text" name="name" required>
            city:
            <input type="text" name="city" required>
            marks:
            <input type="number" name="marks" required>
            <input type="submit" value="submit" name = "submit">
        </form>
    </body>
</html>