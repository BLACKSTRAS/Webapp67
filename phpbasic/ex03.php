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
    function test($x, $y) {
        return ($x <= 20 || $y >= 50) || ($y <= 20 || $x >= 50);
    }

    echo "this is  => ",var_dump(test(20,84)). "<br>";
    echo "this is  => ",var_dump(test(11,54)). "<br>";
    echo "this is  => ",var_dump(test(14,50)). "<br>";
    echo "this is  => ",var_dump(test(25,40)). "<br>";

    // var_dump(test(20,84)). "<br>";
    // var_dump(test(11,54)). "<br>";
    // var_dump(test(14,50)). "<br>";
    // var_dump(test(25,40)). "<br>";

    ?>
    
</body>
</html>