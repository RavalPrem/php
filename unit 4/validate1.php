<!--I am trying to validate the password so please sorry-->

<?php
    $pswd = "RavalPrem";
    
    if(preg_match("/^[A-Za-z]+$/",$pswd)) {
        echo "nice";
    } else{
        echo "Not nice";
    }

    echo "<br><br>";
    $pswd2 = 'Hello123';

    if(preg_match("/^H[a-z]+[1-9]+$/",$pswd2)) {
        echo "password 2 matched";
    } else {
        echo "not matched";
    }
    
    echo "<br><br>";
    $pswd3 = 'Hello@123';

    if(preg_match("/^H[a-z]+@[1-9]+$/",$pswd3)) {
        echo "password 3 matched";
    } else {
        echo "not matched";
    }
?>