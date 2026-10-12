
<!DOCTYPE html>
<html>
<body>

<h2>Student Details Form</h2>

<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Age: <input type="number" name="age" required><br><br>
    Email: <input type="email" name="email" required><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {

    $student = array(
        "name" => $_POST['name'],
        "age" => $_POST['age'],
        "email" => $_POST['email']
    );

    echo "<h3>Student Details</h3>";
    echo "Name: " . $student['name'] . "<br>";
    echo "Age: " . $student['age'] . "<br>";
    echo "Email: " . $student['email'] . "<br>";
}
?>

</body>
</html>
