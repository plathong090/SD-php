<html>

<head>
    <title>แสดงการใช้งาน for </title>
</head>

<body>
    <h1>หาเลขคู่</h1>
    <?php
    for ($num = 1; $num <= 15; $num++) {
        if ($num % 2 == 0) {
            $square = $num * $num;
            echo "$num is power two = $square<br>";
        } 
    }
    ?>
</body>

</html>