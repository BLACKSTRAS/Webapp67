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
    function test($n) {
        return $n % 3 == 0;
        return $n % 3 == 0;
    }
    echo "this is  => ",var_dump(test(12)). "<br>";
    echo "this is  => ",var_dump(test(14)). "<br>";
// This will output: bool(true)
    echo "this is  => ",var_dump(test(37)). "<br>";
// This will output: bool(false)

    ?>

</body>
</html>