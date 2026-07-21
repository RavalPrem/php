<?php
    class Message {
        const msg = 'Hello world';
    
        function Display() {
            echo self::msg;
            echo "<br>";
        }
    }

    $obj1 = new Message();
    $obj1->Display();
?>