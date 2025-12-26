<html>

<head>
    <title>แสดงการใช้งาน if-else แบบ Nested </title>
</head>

<h1>หาค่า min , max</h1>
<body align="center">
    <?php
    $a = 76;
    $b = 16;
    $c = 56;

    $min = 0;
    $max = 0;

    if ($a > $b) {
        if ($a > $c) {
            $max = $a;
        } else {
            $max = $c;
        }
    } else {
        if ($b > $c) {
            $max = $b;
        } else {
            $max = $c;
        }
    }

    if ($a < $b) {
        if ($a < $c) {
            $min = $a;
        } else {
            $min = $c;
        }
    } else {
        if ($b < $c) {
            $min = $b;
        } else {
            $min = $c;
        }
    }

    echo "Three Numbers : <b>$a , $b , $c</b><br/>";
    echo "Min value : <b>$min</b><br/>";
    echo "Max value : <b>$max</b><br/>";
    ?>

</body>

</html>