<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get request</title>
</head>
<body>
    <form method="GET">
        Enter name : <input type="text" name="name"/>
        <input type="submit" value="Submit Here">
    </form>

    <?php
        if(isset($_GET['name'])) {
            $name = $_GET['name'];

            echo "<br> Your name is : $name <br>"; 
        }
    ?>
</body>
</html>