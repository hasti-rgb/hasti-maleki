<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        body {
            background-color: rgb(152, 209, 190);
            text-align: center;
            margin-top: 200px;
        }

        a {
            font-size: 35px;
            color: azure;
        }
    </style>
</head>

<body>
    <?php
    $text = $_POST["text-area"];
    $pattern = "~([-+]?\s*\d+\s*[-+*/]\s*[-+]?\s*\d+)+~";
    if (preg_match($pattern, $text)) {
        $res = eval('return ' . $text . ';');
        echo "<h2> Result is ==> $res</h2>";
    } else {
        echo "<h2>Invalid Input.(E.g. 100+25*2...)</h2>";
    }

    ?>
    <br>
    <a href="index.html">Back</a>

</body>

</html>