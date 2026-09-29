<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone number validation</title>
</head>
<body>
    <form method="POST">
        Enter number : <input type="number" name="phoneNumber"/><br><br>

        <input type="submit" value="submit Here" name="subNumber"/>
    </form>

    <?php
        if(isset($_POST['subNumber'])) {
            $phoneNumber = $_POST['phoneNumber'];

            if(preg_match('/^[0-9]{10}+$/',$phoneNumber)) {
                echo "Phone number is valid";
            } else {
                echo "phone Number is not valid";
            }
        }
    ?>
</body>
</html>