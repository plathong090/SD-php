<html>

<head>
    <title>แสดงการสร้างและเข้าถึง Numeric Array แบบหลายมิติ</title>
</head>


<body>
    <!-- เพิ่มคอลัมน์ซ้ายเป็นลำดับที่ คอลัมน์ขวาเป็นผลรวม-->
    <!-- เพิ่มใหม่ขวาสุดเป็นเกรด ข้างล่างเพิ่มrowหาค่าเฉลี่ยแต่ละอัน หาค่า min,max แต่ละอัน -->
    <?php
    $stuTotal = 15;
    $points = 3;
    
    $sumRow = array_fill(0, $points + 1, 0); //เก็บผลรวม
    $minRow = array_fill(0, $points + 1, 101); 
    $maxRow = array_fill(0, $points + 1, -1);

    //สุ่มคะแนน
    for ($r = 0; $r < $stuTotal; $r++) {
        for ($c = 0; $c < $points; $c++) {
            $score[$r][$c] = rand(0, 35);
        }
    }

    echo "<table border='1' align='center' width='50%'>";
    echo "<tr bgcolor='#808182'><td width='30' align='center'>No.</td>";
    echo "<td width='40' align='center'>Homework</td>";
    echo "<td width='40' align='center'>Midterm</td>";
    echo "<td width='40' align='center'>Final</td>";
    echo "<td width='40' align='center'>Total</td><td width='40' align='center'>GPA</td></tr>";

    //แสดงผลคะแนน
    for ($r = 0; $r < $stuTotal; $r++) {
        $total = 0;
        echo "<tr><td align='center'>" . ($r + 1) . "</td>";

        for ($c = 0; $c < $points; $c++) {
            echo "<td align='center'>" . $score[$r][$c] . "</td>";
            $total += $score[$r][$c];

            $sumRow[$c] += $score[$r][$c];
            $minRow[$c] = min($minRow[$c], $score[$r][$c]);
            $maxRow[$c] = max($maxRow[$c], $score[$r][$c]);
        }
        echo "<td align='center'><b> $total </b></td>";

        //Total
        $sumRow[$points] += $total;
        $minRow[$points] = min($minRow[$points], $total);
        $maxRow[$points] = max($maxRow[$points], $total);

        //grade , เพิ่มเติม แสดงสีตามเกรด
        if ($total >= 80) {
            $grade = "A";
            $color = "green";
        } elseif ($total >= 75) {
            $grade = "B+";
            $color = "limegreen";
        } elseif ($total >= 70) {
            $grade = "B";
            $color = "seagreen";
        } elseif ($total >= 65) {
            $grade = "C+";
            $color = "orange";
        } elseif ($total >= 60) {
            $grade = "C";
            $color = "darkorange";
        } elseif ($total >= 55) {
            $grade = "D+";
            $color = "orangered";
        } elseif ($total >= 50) {
            $grade = "D";
            $color = "red";
        } else {
            $grade = "F";
            $color = "darkred";
        }
        echo "<td align='center'><b style='color:$color;'>$grade</b></td>";
        echo "</tr>";
        
    }

    echo "<tr bgcolor='#d6eeff'><td width='30' align='center'>Average</td>";
    for ($c = 0; $c <= $points; $c++) {
        $avg = $sumRow[$c] / $stuTotal;
        echo "<td align='center'><b>" . number_format($avg, 2) . "</b></td>";
    }
    echo "<td></td>";
    echo "</tr>";

    echo "<tr bgcolor='#ffd6d6'><td width='30' align='center'>Min</td>";
    for ($c = 0; $c <= $points; $c++) {
        echo "<td align='center'><b>" . $minRow[$c] . "</b></td>";
    }
    echo "<td></td>";
    echo "</tr>";

    echo "<tr bgcolor='#d6ffd6'><td width='30' align='center'>Max</td>";
    for ($c = 0; $c <= $points; $c++) {
        echo "<td align='center'><b>" . $maxRow[$c] . "</b></td>";
    }
    echo "<td></td>";
    echo "</tr>";

    echo "</table>";

    
    ?>
</body>

</html>