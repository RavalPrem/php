<!--
    Create class employee, attributes empID, empName, and basicSalary delcareed as private.
    write setter and getter methods to access these attributes.
    Create a function to calculate gross salary by adding 20% HRA and 10% DA, and display salary details.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
</head>
<body>
    <form method="post">
        <h2>Enter employee details</h2>
        Employee ID : <input type="number" name="empid"/> <br><br>
        Employee name : <input type="text" name="empname"/> <br><br>
        Basic Salary : <input type="number" name="salary"/> <br><br>
        <input type="submit" value="Submit Form">
    </form>

    <br><br>
    <h2>Employee Detail</h2>

    <?php
        if(isset($_POST['empid']) && isset($_POST['empname']) && isset($_POST['salary'])) {
            $empid = $_POST['empid'];
            $empname = $_POST['empname'];
            $salary = $_POST['salary'];

            class employee {
                private $empid, $empname, $salary;

                public function setter($empid, $empname, $salary) {
                    $this->empid=$empid;
                    $this->empname=$empname;
                    $this->salary=$salary;
                }

                public function getter() {
                    echo "ID : $this->empid <br>";
                    echo "Name : $this->empname <br>";
                    echo "Salary : $this->salary <br>";
                }

                public function Gross_Salary() {
                    define('HRA',0.2);
                    define('DA',0.1);
                    $gross_salary = ($this->salary * HRA) + ($this->salary * DA) + ($this->salary);
                    echo "Gross Salary : $gross_salary <br>";
                }
            }

            $e1 = new employee();
            $e1->setter($empid, $empname, $salary);
            $e1->getter();
            $e1->Gross_Salary();
        }
    ?>
</body>
</html>