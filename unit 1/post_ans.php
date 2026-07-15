<?php
    if(isset($_POST['email']) && isset($_POST['phone_number'])) {
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];

        echo "<br> email : ".$email ."<br>";
        echo "phone_number : ". $phone_number . "<br>";
    }
?>