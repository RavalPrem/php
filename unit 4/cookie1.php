<?php
    if(isset($_POST['for_cookie'])) {
        $fname = $_POST['user_name'];
        setcookie('firstName',$fname,time() + 25);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Setter</title>
</head>
<body>
    <form method="POST">
        Name : <input type="text" name="user_name" /> <br><br>

        <input type="submit" value="Submit_cookie" name="for_cookie"/ >
    </form>

    <?php
        if(isset($_COOKIE['firstName'])) {
            echo "The cookie name : " . $_COOKIE['firstName'];
        } else{
            echo "the cookie is not set";
        }
        
    ?>
</body>
</html>