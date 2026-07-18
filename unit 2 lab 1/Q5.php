<!--
    create class Mobile
    attributes brand, model, batteryPercentage and price. batteryPercentage should be delcared as private

    write setter and getter method to update and retreive battery Percetange 
    create function to display mobile specification
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Information</title>
</head>
<body>
    <h2>Enter Mobile Information</h2>
    <form method="post">
        Brand : <input type="text" name="brand"/> <br> <br>
        model : <input type="text" name="model"/> <br> <br>
        price : <input type="number" name="price"/> <br> <br>
        BatteryPercentage : <input type="number" name="battery_percentage"/> <br> <br>
        <input type="submit" value="submit">
    </form>

    <br><br>
    <h2>Mobile infomration </h2>

    <?php
        if(isset($_POST['brand']) && isset($_POST['model']) && isset($_POST['price']) && isset($_POST['battery_percentage'])) {
            $brand = $_POST['brand'];
            $model = $_POST['model'];
            $price = $_POST['price'];
            $battery_percentage = $_POST['battery_percentage'];

            class Mobile {
                private $batterPercentage;
                public $brand, $model, $price;

                public function setter($brand, $model, $price,$batterPercentage) {
                    $this->brand = $brand;
                    $this->model = $model;
                    $this->price = $price;

                    $this->batterPercentage = $batterPercentage;
                }

                public function getter() {
                    echo "Brand : $this->brand <br>";
                    echo "model : $this->model <br>";
                    echo "price : $this->price <br>";
                    echo "BatteryPercentage : $this->batterPercentage <br>";
                }
            }

            $m1 = new Mobile();
            $m1->setter($brand, $model, $price, $battery_percentage);
            $m1->getter();
        }
    ?>
</body>
</html>