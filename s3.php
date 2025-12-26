<html>

<head>
    <title>comparison operator</title>
</head>

<body>
    <?php
        $x = 10;
        $y = 10.0;
        $res = ($x < $y);
        echo "\$x < \$y = $res <br/>";

        $res = ($x <= $y);
        echo "\$x <= \$y = $res <br/>";

        $res = ($x > $y);
        echo "\$x > \$y = $res <br/>";

        $res = ($x >= $y);
        echo "\$x >= \$y = $res <br/>";

        $res = ($x == $y);
        echo "\$x == \$y = $res <br/>";
        
        $res = ($x != $y);
        echo "\$x != \$y = $res <br/>";

        $res = ($x === $y);
        echo "\$x === \$y = $res <br/>";
        ?>
</body>

</html>