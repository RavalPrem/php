<?php
    $contacts = array(
    array("name" => "Peter Parker","email" => "peterparker@mail.com"),
    array("name" => "Clark Kent","email" => "clarkkent@mail.com"),
    array("name" => "Harry Potter","email" => "harrypotter@mail.com")
    );

    echo $contacts[1]['name'];
    echo $contacts[1]['email'];

    echo "<br><br><br>";

    foreach($contacts as $a) {
        echo $a['name'] . " " . $a['email'] . "<br>";
    }
?>