<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function test($str) {
            $s = substr($str, strlen($str) - 1);
            return $s . $str. $s;
        }

        echo "this is   => ",test("Red"). "<br>";
        echo "this is   => ",test("Green"). "<br>";
        echo "this is   => ",test("1"). "<br>";

        // echo test("Red"). "<br>";  // ผลลัพธ์: ddRed
        // echo test("Green"). "<br>"; // ผลลัพธ์: nnGreen
        // echo test("1"). "<br>";      // ผลลัพธ์: 

    ?>
</body>
</html>