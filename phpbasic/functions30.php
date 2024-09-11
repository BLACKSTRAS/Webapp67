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
    function addFive(&$num) { 
        // กำหนดตัวแปร
        $num += 5;
        // ตัวแปรมีค่า = 5
    }
    function addsix(&$num) {
        $num += 6;
    }
    $orignum = 10 ;

    addFive( $orignum );
    echo " Value is $orignum<br />";

    addsix( $orignum );
    echo " Value is $orignum<br />";

    ?>
</body>
</html>