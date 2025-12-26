<html>

<head>
    <title>กำหนดค่าแบบอ้างอิง</title>
</head>

<body>
    <?php
    $x = 123;
    $y = "abc";
    echo "$ x = " . $x . "<br /> $ y = " . $y . "<br /><br />";
    $x = &$y;
    echo "$ x = &$ y <br />";
    echo "$ x = " . $x . "<br /><br />New value $ x<br />" . $x = "php<br />" . 
    "$ x = " . $x . "<br />$ y = " . $y . 
    "<br />New value $ y<br />" . $y = 100;
    
    echo "$ x = " . $x . "<br />$ y = " . $y;
?>
</body>

</html>