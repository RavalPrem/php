<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
</head>
<body>
    <form method="post">
        <h2>Student Information form</h2>
        <br><br>
        name : <input type="text" name="sname"/> <br><br>
        Enrollment : <input type="number" name="enr"/> <br><br>
        course : <input type="text" name="course"/> <br><br>
        <input type="submit" value="Submit Form">

    </form>
    
    <br>
    <br>
    
    <h3>Student information down below </h3>

    <?php
        if(isset($_POST['sname']) && isset($_POST['enr']) && isset($_POST['course'])) {
            class student {
                public $name,$enr,$course;

                public function setValue($name,$enr,$course) {
                    $this->name = $name;
                    $this->enr = $enr;
                    $this->course = $course;
                }

                public function getValue() {
                    echo "name :  " . $this->name . "<br>";
                    echo "Enrollment :  " . $this->enr . "<br>";
                    echo "course :  " . $this->course;
                }
            }

            $name = $_POST['sname'];
            $enr = $_POST['enr'];
            $course = $_POST['course'];

            $s1 = new student();
            $s1->setValue($name,$enr,$course);
            $s1->getValue();
        }
    ?>
</body>
</html>