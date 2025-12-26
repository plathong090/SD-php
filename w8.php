<html>

<head>
    <title>แสดงการใช้งาน continue </title>
</head>

<body>
    
    <h1>หาเลขคี่ด้วย continue</h1>

    <?php
    $start = 500;
    $end = 1000;

    for ($num = $start; $num <= $end; $num++) {
        if ($num % 2 == 0 ) {
            echo "*** ข้ามการหารด้วยศูนย์ เพื่อไม่ให้เกิดความผิดพลาด ***<br>";
            continue;
        }
        echo "100 / $num = " . (100 / $num) . " <br>";
    }
    ?>
</body>

</html>