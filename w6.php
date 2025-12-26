<html>

<head>
    <title>แสดงการใช้งาน do...while </title>
</head>

<body>
    
    <h1>หาเลขคี่</h1>
    <?php
    $num = 2;
    do {
        if ($num % 2 != 0) {
            $square = $num * $num;
            echo "$num is power two = $square<br>";
        }
        $num += 1;
    }
    while ($num < 12)
    ?>
</body>

</html>