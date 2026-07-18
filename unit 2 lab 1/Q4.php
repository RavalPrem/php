<!--
    create class Rectangle, attributes length, width.
    member function : area, perimeter
    Display Result using object
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle information</title>
</head>
<body>
    <h2>Enter Reatangle Height and Width</h2>
    <form method="get">
        Height : <input type="number" name="height"/> <br><br>
        Width : <input type="number" name="width"/> <br><br>
        <input type="submit" value="Submit Form"/>
    </form>
    <br><br>

    <h2>Rectangle calculation</h2>

    <?php
        if(isset($_GET['height']) && isset($_GET['width'])) {

            $height = $_GET['height'];
            $width = $_GET['width'];

            class Rectangle {
                public $height, $width;

                public function Set_Value($height, $width) {
                    $this->height = $height;
                    $this->width = $width;
                }
                public function area(){
                    $area = $this->height * $this->width;
                    echo "area : $area <br>";
                }

                public function perimeter() {
                    $perimeter = 2 * ($this->height + $this->width); 
                    echo "Perimeter : $perimeter <br>";
                }
            }

            $r1 = new Rectangle();
            $r1->Set_Value($height, $width);
            $r1->area();
            $r1->perimeter();
        }
    ?>
</body>
</html>