<!--
    create class Book with attribute bid, bname, price as public. memeber functions to add book details, display details and apply
    10% discount on book price.create object to demonstrate.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book information</title>
</head>
<body>
    <form method="get">
        <h2>Enter Book information</h2>
        Book ID : <input type="number" name="bid"/> <br> <br>
        Book Name : <input type="text" name="bname"/> <br> <br>
        Book Price : <input type="number" name="bprice"/> <br> <br>
        <input type="submit" value="Submit form">
    </form>

    <br> <br>

    <?php
        if(isset($_GET['bid']) && isset($_GET['bname']) && isset($_GET['bprice']) ) {
            $bid = $_GET['bid'];
            $bname = $_GET['bname'];
            $bprice = $_GET['bprice'];

            class book {
                public $bid, $bname, $bprice, $Discounted_Price;

                public function setValue($bid, $bname, $bprice) {
                    $this->bid = $bid;
                    $this->bname = $bname;
                    $this->bprice = $bprice;
                }

                public function Discount_Book() {
                    $this->Discounted_Price = $this->bprice * 0.90;
                }

                public function Display_values() {
                    echo "Book id : $this->bid <br>";
                    echo "Book name : $this->bname <br>";
                    echo "Book Price : $this->bprice <br>";
                    echo "Discounted Price : $this->Discounted_Price <br>";
                }
            }

            $b1 = new book();
            $b1->setValue($bid,$bname,$bprice);
            $b1->Discount_Book();
            $b1->Display_values();
        }
    ?>
</body>
</html>