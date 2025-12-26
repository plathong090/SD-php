<html>

<head>
    <title>แสดงการใช้งาน switch </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <h1>Calculate gpa</h1>

    <?php
    $grade = 'B+';
    $gpa = 0;
    switch ($grade) {
        case 'A':
            $gpa = 4;
            break;
        case 'B+':
            $gpa = 3.5;
            break;
        case 'B':
            $gpa = 3;
            break;
        case 'C+':
            $gpa = 2.5;
            break;
        case 'C':
            $gpa = 2;
            break;
        case 'D+':
            $gpa = 1.5;
            break;
        case 'D':
            $gpa = 1;
            break;
        case 'F':
            $gpa = 0;
    }
    echo "Subject <b>662325 Web Programming</b><br/>";
    echo "You got <b>$grade</b>  and <b>GPA = $gpa</b> .<br/>";
    ?>
</body>

</html>