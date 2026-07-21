<?php
    class justPrint {
        public function __construct() {
            echo "<br> Constructor function called <br>";
        }

        public function __destruct() {
            echo "<br> destructor function called <br>";
        }
    }

    $obj1 = new justPrint();
?>