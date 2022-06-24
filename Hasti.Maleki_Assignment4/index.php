<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9*9Table</title>
    <style>
        td {
            border: 1px solid white;
            padding-left: 6px;
            padding-right: 6px;
            padding-top: 6px;
            padding-bottom: 6px;
            text-align: center;

        }

        table {
            margin: 0 auto;
            margin-top: 130px;
            background-color: paleturquoise;
        }
    </style>
</head>

<body>
    <table>
        <?php for ($i = 1; $i <= 9; $i++) {
            echo " <tr>";
            for ($j = 1; $j <= 9; $j++) {
                $res = $i * $j;
                echo " 
                  <td>$res</td>";
            }
            echo
            " </tr>";
        }
        ?>
    </table>
</body>

</html>