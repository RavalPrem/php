<!DOCTYPE html>
<html>
<body>

<h2>Student Details Form</h2>

<form method="post">
    Name 1: <input type="text" name="name[]" required>
    Email 1: <input type="email" name="email[]" required>
    <br><br>

    Name 2: <input type="text" name="name[]" required>
    Email 2: <input type="email" name="email[]" required>
    <br><br>

    Name 3: <input type="text" name="name[]" required>
    Email 3: <input type="email" name="email[]" required>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {

    $students = array();

    for ($i = 0; $i < count($_POST['name']); $i++) {
        $students[$i] = array(
            "name" => $_POST['name'][$i],
            "email" => $_POST['email'][$i]
        );
    }

    echo "<h3>Student Details</h3>";

    foreach ($students as $student) {
        echo "Name: " . htmlspecialchars($student['name']) . "<br>";
        echo "Email: " . htmlspecialchars($student['email']) . "<br><br>";
    }
}
?>

</body>
</html>
