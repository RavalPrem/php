<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find the word from long word</title>
</head>
<body>
    <form method="post">
        Enter text : <input type="text" name="word"/> <br><br>
        <input type="submit" value="submit_Form" name="submit">
    </form>

    <br><br>

    <?php
        if(isset($_POST['submit'])) {
            $userText = $_POST['word'];

            if(preg_match("/[ABC]/",$userText)) {
                echo "A or B or C is not allowed";
            } else {
                echo "ABC not here maybe, nice";
            }
        }
    ?>
</body>
</html>