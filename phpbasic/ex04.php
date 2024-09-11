<!DOCTYPE html>
<html>
<head>
    <title>PHP String</title>
</head>
<body>
    <?php
    function test($s) {
        $ctr_aa = 0;
        $i = 0;
        while ($i < strlen($s) - 1) {
            if (substr($s, $i, 2) == "aa") {
                $ctr_aa++;
            }
            $i++;
        }
        return $ctr_aa;
    }
    
    echo "this is  => ", test("bbaaccaag"). "<br>";
    echo "this is  => ", test("jjkiaaasew"). "<br>"; 
    echo "this is  => ", test("JSaaaakoiaa"). "<br>"; 

    ?>
</body>
</html>
