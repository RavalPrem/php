<?php
    class parent_class {
        public const var1 = "hello";
    }

    class child_class extends parent_class {
        public function printIt() {
            echo "parent class variable " . parent::var1 . "<br>";
        }
    }

    $c1 = new child_class();
    $c1->printIt();
?>