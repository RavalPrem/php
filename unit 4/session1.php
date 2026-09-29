<?php
    session_start();

    // 1. Handle login logic FIRST, before any HTML output
    if(isset($_POST['subInfo'])) {
        $userName = $_POST['user_name'];
        $user_pswd = $_POST['user_password'];

        if($userName == 'prem' && $user_pswd == '123') {
            $_SESSION['username'] = $userName;
            $_SESSION['pswd'] = $user_pswd;

            // This will now work because no HTML has been sent yet!
            header("Location: sessionanswer.php");
            exit;
        } else {
            $error = "User info is not matched";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session topic</title>
</head>
<body>
    <form method="post">
        user name : <input type="text" name="user_name"/> <br><br>
        password : <input type="password" name="user_password"/> <br><br>

        <input type="submit" value="submit info" name="subInfo"/>
    </form>

    <?php 
        // Display error message here if login fails
        if(isset($error)) {
            echo "<p style='color:red;'>$error</p>";
        }
    ?>
</body>
</html>