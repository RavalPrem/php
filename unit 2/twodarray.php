<?php
    $students = [
        [
            "enr" => 325,
            "name" => "prem",
            "course" => "Bsc.IT"
        ],

        [
            "enr" => 263,
            "name" => "Taksh",
            "course" => "Msc.IT"
        ],

        [
            "enr" => 284,
            "name" => "Neel",
            "course" => "Msc.IT (Cyber)"
        ]
    ];

    foreach($students as $student) {
        echo "enrollment : " . $student['enr'] ." | name : ". $student['name'] . " | course : " . $student['course'] . "<br>";
    }
    
    $contacts = array(
        array("name" => "prem",
        "email" => "prem@gmail.com"
        ),
        array("name" => "any",
        "email" => "any@gmail.com"
        )
    );

        echo "<br><br><br> the contact <br>";
        foreach($contacts as $c) {
            echo "name : ".$c['name'] . " | email : " . $c['email'] . "<br>";
        }
        
        
        ?>