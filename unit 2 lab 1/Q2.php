<!--
    create class student, attirbute enrollment, name, marks of 3 subjects. member functions to calculate total marks, percentage,
    and grade, display using object of class
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result</title>
</head>
<body>
    <form method="post">
        <h2>Enter Student's information</h2>
        Enrollment : <input type="number" name="enr"/> <br> <br>

        Name : <input type="text" name="name"/> <br> <br>

        php : <input type="number" name="php"/> <br> <br>

        dbms : <input type="number" name="dbms"/> <br> <br>

        ml : <input type="number" name="ml"/> <br> <br>

        <input type="submit" value="Submit form">
    </form>

    <br> <br>

    <?php
        if(isset($_POST['enr']) && 
            isset($_POST['name']) &&
            isset($_POST['php']) &&
            isset($_POST['dbms']) &&
            isset($_POST['ml'])
        ) {
            $enr = $_POST['enr'];
            $name = $_POST['name'];
            $php = $_POST['php'];
            $dbms = $_POST['dbms'];
            $ml = $_POST['ml'];

            class student_info {
                public $enr, $name, $php, $dbms, $ml, $total_Marks, $percentage;

                public function setValue($enr, $name, $php, $dbms, $ml) {
                    $this->enr = $enr;
                    $this->name = $name;
                    $this->php = $php;
                    $this->dbms = $dbms;
                    $this->ml = $ml;
                }

                public function Total_Makrs() {
                    $this->total_Marks = $this->php + $this->dbms + $this->ml;
                }

                public function percentage() {
                    $this->percentage = $this->total_Marks / 3;
                }

                public function grade() {
                    if($this->percentage >= 90 && $this->percentage <= 100) {
                        echo "Grade A";
                    } else if($this->percentage > 85 && $this->percentage < 90) {
                        echo "Grade B";
                    }else if($this->percentage >= 70 && $this->percentage < 85) {
                        echo "Grade C";
                    }else if($this->percentage >= 65 && $this->percentage < 70) {
                        echo "Grade D";
                    }else if($this->percentage >= 45  && $this->percentage < 65) {
                        echo "Grade E";
                    }else if($this->percentage > 100 && $this->percentage < 0) {
                        echo "Not Possible";
                    } else {
                        echo "Fail";
                    }
                }

                public function Display_Info() {
                    echo "Enrollment : $this->enr <br>";
                    echo "name : $this->name <br>";
                    echo "php : $this->php <br>"; 
                    echo "dbms : $this->dbms <br>"; 
                    echo "ml : $this->ml <br>"; 
                    echo "Percentage : $this->percentage <br>";
                }
            }

            $s1 = new student_info();
            $s1->setValue($enr, $name, $php, $dbms, $ml);
            $s1->Total_Makrs();
            $s1->percentage();
            $s1->Display_Info();
            echo "Result : ";
            echo $s1->grade() . "<br>";
        }
    ?>
    
</body>
</html>