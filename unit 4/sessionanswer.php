<?php
    session_start();

    echo "<br> <h1>". $_SESSION['username'] . " " . $_SESSION['pswd'] . "</h1> <br>";
?>