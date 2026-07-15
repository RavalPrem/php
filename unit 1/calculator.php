<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Enter numbers</td>
            </tr>

            <tr>
                <td>num 1</td>
                <td>
                    <input type="number" name="num1"/>
                </td>
            </tr>
            <tr>
                <td>opeartion </td>
                <td>
                    <select name="operation">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>num 2</td>
                <td>
                    <input type="number" name="num2"/>
                </td>
            </tr>

            <tr>
                <td><input type="reset" value="Clear All"></td>
                <td><input type="submit" value="Calculate"></td>
            </tr>
        </table>
    </form>

    <h2>Calculation </h2>

    <?php
        if(isset($_POST['num1']) && 
           isset($_POST['num2']) && 
           isset($_POST['operation'])
        ) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];

            if($operation == '+') {
                echo "$num1 + $num2 = ".($num1 + $num2) . "<br>";

            } else if($operation == '-') {
                echo "$num1 - $num2 = ".($num1 - $num2) . "<br>";

            } else if($operation == '*') {
                echo "$num1 * $num2 = ".($num1 * $num2) . "<br>";

            } else if($operation == '/') {
                echo "$num1 / $num2 = ".($num1 / $num2) . "<br>";

            } else {
                echo "<br> Invalid Operation occur <br>";
            }
        }   
    ?>
</body>
</html>