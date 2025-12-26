<html>
<html>

<head>
    <title>แสดงการใช้งาน while </title>
</head>

<body align="center">
    <h1>ผลรวมคู่คี่</h1>
    <?php
    $num = 1;
    $even = 0;
    $odd = 0;

    while ($num < 10) {
        if ($num % 2 == 0) {
            echo "$num is Even Number <br>";
            $even += $num;
        } else {
            echo "$num is Odd Number <br>";
            $odd += $num;
        }
        $num++;
    }
    echo "<br><br><b>Sum even = $even</b>";
    echo "<br><b>Sum odd = $odd</b>";
    ?>
</body>

</html>