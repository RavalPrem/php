<?php
    include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Table</title>
    <style>

        table {
            width:100%;
            border:1px solid black;
            border-collapse: collapse;
        }

        td{
            border:1px solid black;
            padding:5px 15px;
        }

        tr:nth-child(even) {
            background-color: #d2dcff;
        }

        a {
            text-decoration: none;
            color:black;
        }

        .btn {
            padding:5px 15px;
            font-size: large;
            border-radius: 100px;
            border:1px solid black;
            box-shadow: 2px 2px 2px #0000009e;
            cursor: pointer;

            &:hover {
                transition-duration: 100ms;
                transform: translate(3px,2px);
                box-shadow: none;
                /* background-color:darkslategray; */
                /* color:orange; */
            }
        }
    </style>
</head>
<body>
    <form method="POST">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Edit</th>
            </tr>

            <?php
                $query1 = "SELECT * FROM students1";
                
                $fetch_rows = mysqli_query($conn,$query1);

                if(mysqli_num_rows($fetch_rows) > 0) {
                    while($row = mysqli_fetch_row($fetch_rows)) {
                        echo "
                            <tr>
                                <td>$row[0]</td>
                                <td>$row[1]</td>
                                <td>$row[2]</td>
                                <td>
                                    <a href='edit.php?id=$row[0]'>
                                        <button type='button' class='btn'>Edit </button>
                                    </a>
                                </td>
                            </tr>
                        ";
                    }
                }
            ?>
        </table>
    </form>
</body>
</html>