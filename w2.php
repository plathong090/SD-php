<html>

<head>
    <title>แสดงการใช้งาน if-elseif </title>
</head>

<body>
    <h1>Calculate gpax</h1>
    <?php
    $score = 76;
    $name = "Somchai";
    echo "Student Name : <b>$name </b><br/>";
    echo "Student Score : <b>$score </b><br/>";
    if ($score >= 80)
        echo "Student Grade : <b>A </b><br/>";

    elseif ($score >= 75)
        echo "Student Grade : <b>B+ </b><br/>";

    elseif ($score >= 70)
        echo "Student Grade : <b>B </b><br/>";

    elseif ($score >= 65)
        echo "Student Grade : <b>C+ </b><br/>";

    elseif ($score >= 60)
        echo "Student Grade : <b>C </b><br/>";

    elseif ($score >= 55)
        echo "Student Grade : <b>D+ </b><br/>";

    elseif ($score >= 50)
        echo "Student Grade : <b>D </b><br/>";
    else
        echo "Student Grade : <b>F </b><br/>";

    ?>
</body>

</html>